<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-2">Total Orders</h3>
                    <p class="text-3xl font-bold text-blue-600">24</p>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-2">Products</h3>
                    <p class="text-3xl font-bold text-green-600">156</p>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-2">Revenue</h3>
                    <p class="text-3xl font-bold text-purple-600">$2,450</p>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-semibold mb-2">Messages</h3>
                    <p class="text-3xl font-bold text-orange-600">5</p>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between border-b pb-4">
                            <div>
                                <h4 class="font-medium">New Order #1234</h4>
                                <p class="text-sm text-gray-500">2 hours ago</p>
                            </div>
                            <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">Completed</span>
                        </div>
                        <div class="flex items-center justify-between border-b pb-4">
                            <div>
                                <h4 class="font-medium">Product Update</h4>
                                <p class="text-sm text-gray-500">5 hours ago</p>
                            </div>
                            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">In Progress</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Quick Actions</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <button class="p-4 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                            Add New Product
                        </button>
                        <button class="p-4 bg-green-500 text-white rounded-lg hover:bg-green-600">
                            View Orders
                        </button>
                        <button class="p-4 bg-purple-500 text-white rounded-lg hover:bg-purple-600">
                            Generate Report
                        </button>
                        <button class="p-4 bg-orange-500 text-white rounded-lg hover:bg-orange-600">
                            Support
                        </button>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">Account Overview</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <span>Account Status</span>
                            <span class="text-green-500">Active</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Last Login</span>
                            <span>Today at 14:30</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span>Subscription</span>
                            <span class="text-blue-500">Premium</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
