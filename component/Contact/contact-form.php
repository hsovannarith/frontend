<section class="bg-gray-50 flex items-center justify-center py-8 ">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-5xl">
        <h2 class="text-2xl font-semibold text-center mb-6">Get in Touch</h2>
        <form action="#" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700 font-medium">Full Name *</label>
                <input type="text" name="name"
                    class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                    placeholder="Your name" required />
            </div>
            <div>
                <label class="block text-gray-700 font-medium">Email Address *</label>
                <input type="email" name="email"
                    class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                    placeholder="Your email" required />
            </div>
            <div>
                <label class="block text-gray-700 font-medium">How can we help? *</label>
                <textarea name="message" rows="4"
                    class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                    placeholder="Your Message" required></textarea>
            </div>
            <button type="submit"
                class="w-full bg-red-700 text-white py-3 rounded-lg hover:bg-red-800 transition flex items-center justify-center gap-2">
                Send Message
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>
            </button>
        </form>
    </div>
</section>