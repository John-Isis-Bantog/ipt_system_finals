<x-layout>
<div class="perspective text-white bg-green-900 w-screen h-screen flex justify-end text-justify hidden md:flex">

    <div class="page absolute duration-1000 flex items-end origin-left w-1/2 transition h-screen transform" data-page="2" onclick="togglePageFlip(this)">
        <div class="front text-xl sm:text-3xl md:text-5xl flex flex-col items-start justify-center px-2 sm:px-5 md:px-20 font-bold bg-green-600 h-screen absolute right-0 w-full h-full">
        <h1 class="text-center text-3xl m-auto">Values</h1>
        <img class="m-5 rounded-lg w-6/12 mx-auto" src="{{ asset('about_value.jpg') }}" alt="Your Photo">


        <div class="text-xl w-9/12 mx-auto">
        <li>
        Respect
            <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                
                We treat everyone with dignity and consideration, fostering a culture of mutual respect and understanding.</li>
            </ol>
        </li>
        
        

        <li>
        Inclusivity
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                
                We embrace diversity and promote an environment where all individuals feel valued and included, regardless of their background or abilities.</li> 
            </ul>
        </li>

        <li>
        Innovation
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                
                We encourage creativity and critical thinking, preparing students to be adaptable and forward-thinking leaders</li>
    
            </ul>
        </li>

        <li>
        Compassion
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                
                We cultivate empathy and kindness, teaching students to care for others and contribute positively to their communities.</li>
    
            </ul>
        </li>

        

       
    </div>
        </div>
        <div class="back text-xl sm:text-3xl md:text-5xl font-bold flex items-center justify-start px-2 sm:px-5 md:px-20 bg-green-600 h-screen absolute w-full h-full">
        <div class="p-4 md:p-5 space-y-4">
        <img class="m-5 rounded-lg" src="{{ asset('mission_and_vision.jpeg') }}" alt="Your Photo">
            <h1 class="text-white text-center">Mission</h1>
                <p class="text-base leading-relaxed text-white dark:text-white text-xl">
                    
                    To develop and offer high quality technical, health and higher education programs that would ensure 
                    employability and productivity of young men and women through proper value and principles as a 
                    means to achieve success with excellence for a better quality of life.
                </p>
                <h1 class="text-white text-center">Vision</h1>
                <p class="text-base leading-relaxed text-white dark:text-white text-xl">
                    
                A center of excellence in technical, vocational, health and higher education in Bataan, pursuing dynamic program offerings paralleled to global standards to uplift the socio-economic growth of the province.
                </p>
            </div>
        </div>
    </div>

    <div class="page absolute duration-1000 flex items-end origin-left w-1/2 transition h-screen transform" data-page="1" onclick="togglePageFlip(this)">
        <div class="front text-xl sm:text-3xl md:text-5xl flex flex-col items-start justify-center px-2 sm:px-5 md:px-20 font-bold bg-green-600 h-screen absolute right-0 w-full h-full">
        <h1 class="text-center text-3xl">History of eastwoods  Professional College(Foremely Softnet College)</h1>
        <img class="m-5 rounded-lg w-8/12 mx-auto" src="{{ asset('about_history.jpg') }}" alt="Your Photo">
        <p class="text-xl w-9/12 mx-auto">Softnet College of Science and Technology, Inc. was founded in December 1993 by President Gregorio M. Sison Jr. and began operations in 1994. Initially known as SOFTNET Computer Learning Specialists, Inc., the college initially offered one-year courses in computer science in programming and computer secretarial. In 1995, enrollment reached 102 students, requiring a transfer tocubacob Bldg. and a move to Dona Dominicga Bldg. The following year, the Department of Education Culture And Sports granted permission for 2-year courses in Computer Science in Programming, Computer Secretarial, and Computer Technician.
    </p>
        </div>
        <div class="back text-xl sm:text-3xl md:text-5xl flex flex-col items-start justify-center px-2 sm:px-5 md:px-20 font-bold bg-green-600 h-screen absolute right-0 w-full h-full">
            
            <h1 class="text-center text-3xl mx-auto">Philosophy </h1>
            <img class="m-5 rounded-lg w-9/12 mx-auto" src="{{ asset('about_phy.jpg') }}" alt="Your Photo">
            <p class="text-xl w-9/12 mx-auto ">The paramount role of EASTWOODS PROFESSIONAL COLLEGE OF SCIENCE AND TECHNOLOGY is to empower our studentry, through education 
            and training with a solid foundation of knowledge, skills, and moral values necessary in the attainment of their potential enabling
            them to be competitive, proactive and productive citizen of our country </p>
        </div>
    </div>
</div>

<div class="w-full  bg-cover bg-center flex flex-col md:hidden" style="background-image: url('bg-all.jpg');">
<ul class="space-y-4 text-gray-500 list-disc list-inside dark:text-white bg-green-700 mx-10 p-5 m-10 rounded-lg">
<div class="flex flex-col md:flex-row justify-between">
    <div class="flex flex-col md:flex-row">
        <button data-modal-target="rules" data-modal-toggle="rules" class="block text-white m-1 bg-blue-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 " type="button">
            Rules and Regulation
        </button>
        <button data-modal-target="mission" data-modal-toggle="mission" class="block text-white bg-blue-700 m-1 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
            Mission And Vision
        </button>
    </div>
    <div class="flex md:flex-col">
        <a href="#history">
            <button class="block text-white m-1 bg-blue-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
                History
            </button>
        </a>
        <a href="#philosophy">
            <button class="block text-white m-1 bg-blue-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
                Philosophy
            </button>
        </a>
        <a href="#values">
            <button class="block text-white m-1 bg-blue-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
                Values
            </button>
        </a>
    </div>
</div>

    
  
    

    
<div class="container mx-auto" id="history">
    <h1 class="text-center text-xl text-white">History of eastwoods  Professional College(Foremely Softnet College)</h1>
    <img class="m-5 rounded-lg w-6/12 mx-auto text-white" src="{{ asset('about_history.jpg') }}" alt="Your Photo">
    <p class="text-large text-white">Softnet college of science and technology, inc. was conceptualized in december of 1993 by the president Mr. Gregorio M. Sison Jr.
         and started operations in 1994. The college was then known as SOFTNET Computer Learning Specialists, inc. and was renting 2 
         rooms at Santiago Bldg. in Capitol Drive, Balanga. We then offered one-year courses in computer science in programming and in 
         computer secretarial. A total of 79 enrollees were out clients during first year of operation. in 1995, the enrollment build up 
         to 102 students, which necessitated our transfer to cubacob Bldg. (also in balanga) renting the first and second floors. with 281 
         enrollees the following year we had to move to another site, the Dona dominga bldg. also in balanga. this was the year the Dept. of 
         education Culture And Sports(DECS) granted us the permit to offer 2-year courses in Computer Science in Programming, Computer Secretarial(Office
          Procedure), and Computer Technician.
    </p>
</div>

<div class="container mx-auto text-white" id="philosophy">
<img class="m-5 rounded-lg w-6/12 mx-auto" src="{{ asset('about_phy.jpg') }}" alt="Your Photo">
    <h1 class="text-center text-xl">Philosophy </h1>
    <p class="text-lg">The paramount role of EASTWOODS PROFESSIONAL COLLEGE OF SCIENCE AND TECHNOLOGY is to empower our studentry, through education 
        and training with a solid foundation of knowledge, skills, and moral values necessary in the attainment of their potential enabling
         them to be competitive, proactive and productive citizen of our country </p>
</div>

<div class="container mx-auto text-white" id="values">
<img class="m-5 rounded-lg w-6/12 mx-auto" src="{{ asset('about_value.jpg') }}" alt="Your Photo">
<h1 class="text-center text-xl">Values</h1>
    <div class="text-lg">
        <li>
        Respect
            <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                
                We treat everyone with dignity and consideration, fostering a culture of mutual respect and understanding.</li>
            </ol>
        </li>
        <li>
        Integrity
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                
                We act with honesty and uphold strong moral principles, ensuring trust and accountability in all our actions.
            </ul>
        </li>
        <li>
        Excellence
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                We strive for the highest standards in all our endeavors, encouraging a commitment to continuous improvement and lifelong learning</li>
            </ul>
        </li>

        <li>
        Inclusivity
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                
                We embrace diversity and promote an environment where all individuals feel valued and included, regardless of their background or abilities.</li> 
            </ul>
        </li>

        <li>
        Innovation
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                
                We encourage creativity and critical thinking, preparing students to be adaptable and forward-thinking leaders</li>
    
            </ul>
        </li>

        <li>
        Compassion
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                
                We cultivate empathy and kindness, teaching students to care for others and contribute positively to their communities.</li>
    
            </ul>
        </li>

        <li>
        Collaboration
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                
            We work together as a community, valuing teamwork and the sharing of ideas to achieve common goals</li>
    
            </ul>
        </li>

        <li>
        Responsibility
            <ul class="ps-5 mt-2 space-y-1 list-decimal list-inside">
            
                
                We take ownership of our actions and their impact, promoting a sense of accountability and stewardship</li>
    
            </ul>
        </li>
    </div>

    </ul>


</x-layout>

    




<!-- rules modal -->
<div id="rules" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full ">
    <div class="relative p-4 w-full max-w-2xl max-h-full ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-green-700 ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-green-600">
                <h3 class="text-xl font-semibold text-green-900 dark:text-green">
                    Rules And Regulations
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-green-200 hover:text-green-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-green" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <h1 class="text-white text-center">Rules And Regulation</h1>
                <div class="text-base leading-relaxed text-white dark:text-white">
                  
                    <h1>Attendance and Punctuality</h1>
                    <li>
                        Students must attend school regularly and be on time for all classes.
                    </li>
                    <li>
                        Absences must be justified with a valid reason and a note from a parent or guardian.
                    </li>

                    <h1>Dress Code</h1>
                    <li>Students must wear the prescribed school uniform.</li>
                    <li>Clothing should be neat, clean, and appropriate for the school environment.</li>

                    <h1>Behavior:</h1>
                    <li>Respect all staff, students, and school property.</li>
                    <li>Bullying, harassment, and discrimination are strictly prohibited.</li>
                    <li>Maintain a positive and cooperative attitude.</li>
                  
                    <h1>Classroom Conduct:</h1>
                    <li>Follow the teacher’s instructions and participate actively in class.</li>
                    <li>Keep the classroom clean and tidy.</li>
                    <li>Use electronic devices only with the teacher’s permission.</li>

                    <h1>Use of Facilities</h1>
                    <li>Respect and take care of school facilities and equipment.</li>
                    <li>Use designated areas for eating and dispose of trash properly.</li>

                    <h1>Communication</h1>
                    <li>Communicate respectfully with peers and staff.</li>
                    <li>Use appropriate language at all times.</li>

                    <h1>Consequences</h1>
                    <li>Understand that breaking rules may result in consequences such as detention, suspension, or other disciplinary actions</li>
                </div>
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-green-200 rounded-b dark:border-green-600">
                <button data-modal-hide="rules" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:green-blue-700 dark:focus:ring-green-800">Close</button>
               
            </div>
        </div>
    </div>

</div>

<!-- mission modal -->
<div id="mission" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-green-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-green-600">
                <h3 class="text-xl font-semibold text-green-900 dark:text-green">
                    Mission And Vision
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-green-200 hover:text-green-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-green" data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
            <h1 class="text-white text-center">Mission</h1>
                <p class="text-base leading-relaxed text-white dark:text-white">
                    
                    To develop and offer high quality technical, health and higher education programs that would ensure 
                    employability and productivity of young men and women through proper value and principles as a 
                    means to achieve success with excellence for a better quality of life.
                </p>
                <h1 class="text-white text-center">Vision</h1>
                <p class="text-base leading-relaxed text-white dark:text-white">
                    
                A center of excellence in technical, vocational, health and higher education in Bataan, pursuing dynamic program offerings paralleled to global standards to uplift the socio-economic growth of the province.
                </p>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-green-200 rounded-b dark:border-green-600">
                <button data-modal-hide="rules" type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:green-blue-700 dark:focus:ring-green-800">Close</button>
               
            </div>
        </div>
    </div>
</div>
</div>







