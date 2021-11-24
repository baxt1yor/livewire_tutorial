<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        </div>
        <div class="mt-8 sm:mx-auto sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="mt-8 space-y-6" wire:submit.prevent="register" action="#" method="POST">
                    <input type="hidden" name="remember" value="true">
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="ful-name" class="block text-sm font-medium leading-5 text-gray-700">
                                Full name
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="ful-name" wire:model="name" name="name" type="text" autocomplete="name"
                                       required
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300
                                       rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue
                                       focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm
                                       @error('name') border-red-500 @enderror
                                       sm:leading-5"
                                       placeholder="Full name">
                            </div>
                            @error('name') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label for="email-address" class="block text-sm font-medium leading-5 text-gray-700">
                                Email address
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="email-address" wire:model="email" name="email" type="email" autocomplete="email" required
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300
                                       rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue
                                       focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm
                                       @error('email') border-red-500 @enderror
                                       sm:leading-5"
                                       placeholder="Email address">
                            </div>
                            @error('email') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                                Password
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="password" wire:model.lazy="password" name="password" type="password"
                                       autocomplete="password" required
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300
                                       rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue
                                       focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm
                                       @error('password') border-red-500 @enderror
                                       sm:leading-5"
                                       placeholder="Password">
                            </div>
                            @error('password') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div> @enderror
                        </div>
                        <div>
                            <label for="passwordConfirmation" class="block text-sm font-medium leading-5
                            text-gray-700">
                                Password confirmation
                            </label>
                            <div class="mt-1 rounded-md shadow-sm">
                                <input id="passwordConfirmation" wire:model.lazy="passwordConfirmation"
                                       name="passwordConfirmation" type="password"
                                       autocomplete="passwordConfirmation"
                                       required
                                       class="appearance-none block w-full px-3 py-2 border border-gray-300
                                       rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue
                                       focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm
                                       @error('passwordConfirmation') border-red-500 @enderror
                                       sm:leading-5"
                                       placeholder="Password confirmation">
                            </div>
                            @error('passwordConfirmation') <div class="mt-1 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                                Forgot your password?
                            </a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                  <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                    <!-- Heroicon name: solid/lock-closed -->
                    <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                  </span>
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-6">
            <p class="mt-2 text-center text-sm leading-5 text-gray-500 max-w">
                <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none
                focus:underline transition ease-in-out duration-150">
                    Already have an account?
                </a>
            </p>
        </div>
    </div>
</div>



{{--<form wire:submit.prevent="register">--}}

{{--    <div>--}}
{{--        <label for="name">Name</label>--}}
{{--        <input wire:model="name" type="text" id="name" name="name">--}}
{{--        @error('name') <span style="color: darkred">{{ $message }}</span> @enderror--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="email">email</label>--}}
{{--        <input wire:model="email" type="email" id="email" name="email">--}}
{{--        @error('email') <span style="color: darkred">{{ $message }}</span> @enderror--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="password">Password</label>--}}
{{--        <input wire:model="password" type="password" id="password" name="password">--}}
{{--        @error('password') <span style="color: darkred">{{ $message }}</span> @enderror--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="passwordConfirmation">Password Confirm</label>--}}
{{--        <input wire:model="passwordConfirmation" type="password" id="passwordConfirmation" name="passwordConfirmation">--}}
{{--        @error('passwordConfirmation') <span style="color: darkred">{{ $message }}</span> @enderror--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <input type="submit" value="Register">--}}
{{--    </div>--}}
{{--</form>--}}
