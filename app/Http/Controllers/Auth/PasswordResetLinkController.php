<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(): View
    {
        return view('auth.forgot-password');
    }

    function unique_id() {
        list($usec, $sec) = explode(' ', microtime());
        $usec *= 1000000;
        //$usec = intval($usec);
            return sprintf('%s%08x%05x', $prefix, $sec, $usec);
    }

    function test($sec, $usec) {
        return md5(sprintf('%08x%05x', $sec, $usec));
    }

    

    /**
     * Handle an incoming password reset link request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $old_token = DB::table('password_reset_tokens')->where('email', "=", $request->only('email'))->first();
        $carbon_time_token = Carbon::create($old_token?->created_at);
        
        if ($carbon_time_token->gt(Carbon::now()->subMinutes(15))) {
            return back()->with('status', "Password reset token already created at: " . $carbon_time_token->isoFormat('Y-MM-DD H:mm:ss') . " Please wait before requesting another. ");
        }

        $new_token = md5(uniqid());
        list($usec, $sec) = explode(' ', microtime());
        $usec *= 1000000;
        $now = now()->isoFormat('Y-MM-DD H:mm:ss');
        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $new_token, 'created_at' => $now, 'microseconds' => intval($usec)]
        );

        return back()->with('status', "Password reset url created, please wait to recieve token in your mind through epic mind magics");

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status == Password::RESET_LINK_SENT
                    ? back()->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }
}
