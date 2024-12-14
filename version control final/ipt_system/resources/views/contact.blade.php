<x-layout>
    
<div class="w-full min-h-screen bg-cover bg-center flex flex-col sm:flex-row" style="background-image: url('bg_contact.jpg');">
    <div class="m-auto h-auto bg-green-800 p-8 md:p-16 text-white flex flex-col md:flex-row items-start md:items-center space-y-6 md:space-y-0 md:space-x-10">
        <div class="text-lg md:text-xl">
            <ul class="space-y-4">
                <li>Address: MGHP+QPQ, City of Balanga, Bataan</li>
                <li>Contact Number: (047) 791 2791</li>
                <li>Email: eastwoodsprofessional@yahoo.com</li>
                <li>
                    Operation Hours:
                    <ul class="list-disc list-inside">
                        <li>Monday to Friday: 8:00 am to 8:00 pm</li>
                        <li>Saturday: 8:00 am to 3:00 pm</li>
                        <li>Sunday: CLOSED</li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <div class="w-full md:w-6/12 flex">
            <!-- Map -->
            <iframe class="w-full h-64 md:h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1147.4598205596685!2d120.53647958338185!3d14.67980376558722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339641c0395eb9e9%3A0x7d3d02d68a830230!2sEASTWOODS%20Professional%20College%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sph!4v1698200642533!5m2!1sen!2sph" style="border: 2px solid;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


   


<section class="bg-white dark:bg-gray-900 min-h-screen">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-3xl md:text-4xl font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
        <form action="#" class="space-y-8" id="contact-form">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                <input type="text" name="user_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="example: John Doe" required>
            </div>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                <input type="email" name="user_email" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="email@example.com" required>
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                <textarea name="user_message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send message</button>
            <p class="text-white" id="contact-message">Message:</p>
        </form>
    </div>
</section>

</x-layout>