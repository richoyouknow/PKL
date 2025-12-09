<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Email and Password Registration</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "text-light": "#111418",
                        "text-dark": "#f6f7f8",
                        "muted-light": "#617589",
                        "muted-dark": "#9baabf",
                        "border-light": "#dbe0e6",
                        "border-dark": "#34404f"
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>

<body class="font-display bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
    <div class="relative flex min-h-screen w-full flex-col items-center justify-center p-4">
        <div
            class="flex w-full max-w-md flex-col rounded-xl border border-border-light bg-white dark:border-border-dark dark:bg-background-dark/50">
            <!-- PageHeading -->
            <div class="flex flex-col gap-2 p-8 pb-6">
                <h1 class="text-3xl font-black leading-tight tracking-[-0.033em] text-text-light dark:text-text-dark">
                    Create Your Account</h1>
                <p class="text-base font-normal text-muted-light dark:text-muted-dark">Already have an account? <a
                        class="font-medium text-primary hover:underline" href="#">Log in</a></p>
            </div>
            <div class="flex flex-col gap-5 px-8 pb-8">
                <!-- Email TextField -->
                <label class="flex flex-col w-full">
                    <p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Email Address
                    </p>
                    <div
                        class="group flex w-full flex-1 items-stretch rounded-lg border border-border-light bg-white focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 dark:border-border-dark dark:bg-background-dark/80">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-l-lg border-0 bg-transparent p-3.5 text-base font-normal leading-normal text-text-light placeholder:text-muted-light focus:outline-0 focus:ring-0 dark:text-text-dark dark:placeholder:text-muted-dark"
                            placeholder="you@example.com" type="email" />
                        <div class="flex items-center justify-center pr-3.5 text-muted-light dark:text-muted-dark">
                            <span class="material-symbols-outlined text-2xl">mail</span>
                        </div>
                    </div>
                </label>
                <!-- Password TextField -->
                <div class="flex flex-col">
                    <label class="flex flex-col w-full">
                        <p class="pb-2 text-sm font-medium leading-normal text-text-light dark:text-text-dark">Password
                        </p>
                        <div
                            class="group flex w-full flex-1 items-stretch rounded-lg border border-border-light bg-white focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 dark:border-border-dark dark:bg-background-dark/80">
                            <input
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-l-lg border-0 bg-transparent p-3.5 text-base font-normal leading-normal text-text-light placeholder:text-muted-light focus:outline-0 focus:ring-0 dark:text-text-dark dark:placeholder:text-muted-dark"
                                placeholder="Enter your password" type="password" />
                            <div class="flex items-center justify-center pr-3.5 text-muted-light dark:text-muted-dark">
                                <span class="material-symbols-outlined cursor-pointer text-2xl">visibility_off</span>
                            </div>
                        </div>
                    </label>
                    <!-- BodyText -->
                    <p class="pt-2 text-sm font-normal leading-normal text-muted-light dark:text-muted-dark">Minimum 8
                        characters.</p>
                </div>
                <!-- SingleButton -->
                <button
                    class="flex h-12 w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg bg-primary text-base font-bold leading-normal tracking-[0.015em] text-white transition-opacity hover:opacity-90">
                    <span class="truncate">Create Account</span>
                </button>
            </div>
        </div>
    </div>
</body>

</html>
