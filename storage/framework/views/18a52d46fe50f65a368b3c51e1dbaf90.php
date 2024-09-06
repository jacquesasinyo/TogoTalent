<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TogoTalent</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
</head>
<body class="bg-black text-white font-hanken-grotesk ">
    <div class="px-10">
        <nav class="flex justify-between items-center border border-white/30">
            <div>
                <a href="/"><img src="<?php echo e(Vite::asset('resources/images/logo.png')); ?>" alt="logo" style="width: 40px; height: auto;"></a>
            </div>
            <div class="space-x-6 font-bold ">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>

            </div>
            <?php if(auth()->guard()->check()): ?>
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form method="POST" action="/logout">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button>Log Out</button>
                    </form>
                </div>
            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            <?php endif; ?>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            <?php echo e($slot); ?>

        </main>
    </div>
</body>
</html>
<?php /**PATH /Users/jacques/Herd/TogoTalent/resources/views/components/layout.blade.php ENDPATH**/ ?>