<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- 検索 -->
            <div class="mt-8 bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">商品検索</h2>
                <form action="#" method="GET" class="flex items-center">
                    <x-text-input class="flex-grow" placeholder="商品名を入力" />
                    <x-primary-button type="submit" class="ml-1">検索</x-primary-button>
                </form>
            </div>

            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">お気に入り商品</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- 商品カード -->
                    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-4" x-data="{ show: false }">
                        <img src="https://via.placeholder.com/150" alt="商品画像" class="w-full h-48 object-cover rounded-md mb-4">
                        <h3 class="text-xl font-bold mb-2 cursor-pointer" 
                            x-on:click="$dispatch('open-modal', 'product-modal')">
                            商品名
                        </h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">説明</p>
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-semibold text-green-600">価格</span>
                            <x-primary-button>購入</x-primary-button>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <x-modal name="product-modal">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-4">商品詳細</h2>
                    <p>詳細</p>
                    <x-primary-button @click="$dispatch('close-modal', 'product-modal')">閉じる</x-primary-button>
                </div>
            </x-modal>
        </div>
    </div>
</x-app-layout>