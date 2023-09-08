<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $gnome = [
            'name' => 'Gnome',
            'email' => 'gone@gnome.com',
            'password' => Hash::make('password'),
            'post' => "I may be small in stature, but my enthusiasm for networking knows no bounds! 🧚‍♂️ As a gnome with a deep-rooted passion for the natural world and a penchant for enchanting gardens, I'm excited to connect with fellow professionals who share my love for all things green and magical.",
            'secret' => "Skills:
            🌿 Master of Horticulture (and occasional interpretive dance)
            🌲 Forest Conservation (sometimes, I ask the trees to dance)
            🌺 Floral Design (with a flair for mismatched colors)
            🌼 Ecosystem Harmony (I once convinced a squirrel to meditate)
            🌟 Nature Magic (mostly practiced during moonlit gnome dances)
            🔮 Mycology Expertise (I give mushrooms nicknames)",
            'isPrivate' => 0,
        ];

        $c = [
            'name' => 'Pretty Cool Wizard Man',
            'email' => 'coolwiz@wizard.com',
            'password' => Hash::make('password'),
            'post' => "🧙‍♂️✨ Greetings, fellow BlinkedIn Sorcerers! ✨🧙‍♂️

            I hope this message finds you enchanted and thriving in your respective realms of expertise. Today, I wanted to share a few magical insights that I've conjured up on my mystical journey through the ever-changing landscape of our professional realm. 🌟
            
            🔮 The Art of Networking: Just like the intricate spells we weave, networking is all about creating connections that resonate with the heart and soul. Remember, a wizard is only as powerful as their allies. So, let's continue to expand our magical networks, forging alliances that will help us conquer new professional horizons!
            
            🌠 Learning & Growth: In the realm of knowledge, there is no end to the journey. Just as wizards constantly seek to deepen their arcane wisdom, we too must be committed to lifelong learning. Embrace new spells, study ancient scrolls, and watch as your powers grow beyond your wildest dreams.",
            'secret' => 'About Me: Greetings, mystical beings of BlinkedIn! I am Bob, a seasoned enchanter with a passion for the arcane and an insatiable thirst for knowledge. My journey through the realms of magic has led me to become a versatile and experienced wizard, specializing in everything from alchemy to time manipulation.',
            'isPrivate' => 0,
        ];

        $flag = [
            'name' => 'Flag Wizard',
            'email' => 'flag@wizard.com',
            'password' => Hash::make('password'),
            'post' => "As your friendly neighborhood Flag Wizard, I am thrilled to share my passion for the colorful world of flags with you all. Flags aren't just pieces of fabric; they're powerful symbols that unite nations, celebrate cultures, and tell stories of triumph and unity. 🌟🌎

            Today, I want to celebrate the artistry and significance of flags by discussing some magical aspects of these iconic banners:
            
            🌟 Colors and Symbolism: Each color and symbol on a flag holds a unique enchantment. From the vibrant reds symbolizing courage and passion to the serene blues representing peace and tranquility, flags are like spells woven with meaning.
            
            🌐 Cultural Magic: Flags are a window into the rich tapestry of human culture. They convey the essence of a nation's history, values, and aspirations. Let's continue to embrace the cultural magic that flags bring to our world.",
            'secret' => 'secret',
            'isPrivate' => 1,
        ];

        $b = [
            'name' => 'Bricky',
            'email' => 'brick@wizard.com',
            'password' => Hash::make('password'),
            'post' => "Bricks may seem like humble, unassuming elements, but they form the backbone of our world's most magnificent structures. Let's connect to explore the enchantment of bricks, exchange insights on magical masonry, or simply share our love for the art of crafting the enduring foundations of our society! 🧱🏰

            Whether you're a fellow brick wizard, an architect, or simply someone who appreciates the beauty of solid construction, let's build connections as strong as the mightiest castle walls! ",
            'secret' => "Professional Experience:
            🏰 Master Mason at Stoneheart Constructions
            
            Leading a team of skilled artisans in creating formidable fortifications and breathtaking citadels.
            Mastering the arcane art of Terra Arcana - the magic of imbuing bricks with elemental resilience.",
            'isPrivate' => 0,
        ];

        $ceo = [
            'name' => 'Ceo',
            'email' => 'ceo@wizard.com',
            'password' => Hash::make('password'),
            'post' => "Welcome to the beta version of BlinkedIn!, our junior developers have been hard at work developing this site.
            As you can see there are some features missing but we are implementing them soon(TM)!
            Please feel free to try out the site to your hearts content! We are especially proud of our password reset functionality utilizing the latest in mind magic!
            In addition to telepathically sending you the reset tokens our junior developers have also implemented an extra secure token generation algorithm!",
            'secret' => "Ceo!",
            'isPrivate' => 0,
        ];


        //DB::table('users')->insert([
        //    'name' => 'Flag Wizard',
        //    'email' => 'flag@wizard.com',
        //    'password' => Hash::make('password'),
        //    'post' => "As your friendly neighborhood Flag Wizard, I am thrilled to share my passion for the colorful world of flags with you all. Flags aren't just pieces of fabric; they're powerful symbols that unite nations, celebrate cultures, and tell stories of triumph and unity. 🌟🌎
        //    Today, I want to celebrate the artistry and significance of flags by discussing some magical aspects of these iconic banners:
        //    🌟 Colors and Symbolism: Each color and symbol on a flag holds a unique enchantment. From the vibrant reds symbolizing courage and passion to the serene blues representing peace and tranquility, flags are like spells woven with meaning.
        //    🌐 Cultural Magic: Flags are a window into the rich tapestry of human culture. They convey the essence of a nation's history, values, and aspirations. Let's continue to embrace the cultural magic that flags bring to our world.",
        //]);

        DB::table('users')->insert([$c, $flag, $gnome, $b]);


    }
}
