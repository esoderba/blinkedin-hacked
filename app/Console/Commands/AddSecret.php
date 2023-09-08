<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Support\Facades\DB;

class AddSecret extends Command implements PromptsForMissingInput
{

  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'user:secret
        {userName}
        {secret}';

  /**
   * Prompt for missing input arguments using the returned questions.
   *
   * @return array
   */
  protected function promptForMissingArgumentsUsing()
  {
    return [
      'userName' => 'Username',
      'secret' => 'secret',
    ];
  }

  /**
   * Execute the console command.
   * FIXME: Currently lacks pagination support
   * https://github.com/lipas-liikuntapaikat/lipas-api#pagination
   * TODO: Error handling
   */
  public function handle()
  {
    $userName = $this->argument('userName');
    $secret = $this->argument('secret');

    $user = User::where('name', $userName)->first();
    if (!$user) {
      echo ('Could not find user with that name.' . PHP_EOL);
      return self::FAILURE;
    }
    $user->secret = $secret;
    $user->save();
    echo ('Saved secret' . PHP_EOL);
  }
}
