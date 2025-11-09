<x-layout>
    <x-slot:title>Contact</x-slot:title>

    {{-- Hilangkan header otomatis --}}
    <x-slot:header></x-slot:header>

    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="max-w-md w-full bg-gray-800/50 backdrop-blur-sm border border-white/10 rounded-xl shadow-xl p-8">

            <h2 class="text-2xl font-semibold text-white mb-6">
                Contact Us
            </h2>

            <form action="#" method="POST" class="space-y-4">

                @csrf

                <!-- Nama -->
                <div>
                    <label class="block text-gray-300 mb-1" for="name">Your Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Enter your name"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-white/10
                               focus:border-indigo-400 focus:ring focus:ring-indigo-500/20 transition">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-300 mb-1" for="email">Your Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Enter your email"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-white/10
                               focus:border-indigo-400 focus:ring focus:ring-indigo-500/20 transition">
                </div>

                <!-- Pesan -->
                <div>
                    <label class="block text-gray-300 mb-1" for="message">Your Message</label>
                    <textarea
                        id="message"
                        name="message"
                        rows="4"
                        placeholder="Enter your message"
                        class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white border border-white/10
                               focus:border-indigo-400 focus:ring focus:ring-indigo-500/20 transition"></textarea>
                </div>

                <button
                    type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-500 transition text-white py-2 px-4 rounded-lg">
                    Send Message
                </button>

            </form>

        </div>
    </div>

</x-layout>
