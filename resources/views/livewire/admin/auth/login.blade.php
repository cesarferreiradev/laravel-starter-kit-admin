<div>
    <div class="min-h-screen flex fle-col items-center justify-center">
        <div class="py-6 px-4">
            <div class="grid lg:grid-cols-2 items-center gap-6 max-w-6xl w-full">
                <div class="border border-slate-300 rounded-lg p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-lg:mx-auto">
                    <form class="space-y-6" wire:submit="authenticate">
                        <div class="mb-8">
                            <h1 class="text-slate-900 text-3xl font-semibold">Módulo admin</h1>
                            <p class="text-slate-600 text-[15px] mt-6 leading-relaxed">Faça login na sua conta e explore toda a gestão do seu condomínio</p>
                        </div>

                        <div class="row space-y-6">
                            <div class="col-12">
                                <x-ts-input label="Email *" required wire:model="email" />
                            </div><div class="col-12">
                                <x-ts-password label="Senha *" required wire:model="password" />
                            </div>
                        </div>

                        <!-- Todo: Recuperar senha -->
                        {{--<div class="flex flex-wrap items-center justify-between gap-4">

                            <div class="text-sm">
                                <a  class="text-blue-600 hover:underline font-medium">
                                    Esqueci minha senha
                                </a>
                            </div>
                        </div>--}}

                        <div class="!mt-12">
                            <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-[15px] font-medium tracking-wide rounded-lg text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>

                <div class="max-lg:mt-8">
                    <img src="https://readymadeui.com/login-image.webp" class="w-full aspect-[71/50] max-lg:w-4/5 mx-auto block object-cover" alt="login img" />
                </div>
            </div>
        </div>
    </div>
</div>
