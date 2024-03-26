<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class=" bg-gray-900 p-8">
    <div class=" max-w-6xl mx-auto bg-gray-800 p-8 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-6 text-gray-200">FAQs</h2>

        <div class="mb-4">
            <label for="search" class="block text-base font-medium text-gray-300">Search FAQs</label>
            <input type="text" id="search" name="search" oninput="filterFAQs()" class="mt-1 p-2 w-full bg-transparent border-gray-300 focus:border-none border-2 text-gray-100 rounded-md">
        </div>

        <div id="faqList">
          <!-- Here, FAQs will be dynamically added here based on the search -->
        </div>
    </div>

    <script>
        // Here, We can add Question and Answer for FAQs
        const faqs = [
            { question: "How to create an account?", answer: "To create an account, click on the 'Sign Up' button and fill in the required information." },
            { question: "How to reset my password?", answer: "You can reset your password by clicking on the 'Forgot Password' link on the login page." },
            { question: "What types of workers are available on the platform?", answer: "Our platform offers a diverse range of workers, including but not limited to electricians, plumbers, mechanics, teachers, chefs, dancers, and more." },

            { question: "How does the payout system work on the platform?", answer: "Our platform facilitates secure and convenient payouts. Once a project is completed, funds are transferred to the worker's account." },

            { question: "What types of workers are available on the platform?", answer: "Our platform offers a diverse range of workers, including but not limited to electricians, plumbers, mechanics, teachers, chefs, dancers, and more." },

            { question: "Can I hire workers for short-term projects or only long-term commitments?", answer: "You have the flexibility to hire workers for both short-term and long-term projects based on your specific requirements." },

            { question: "Is the payment system flexible?", answer: "Yes, our payment system is flexible. You can choose to pay workers per hour or negotiate project-based payments." },

            { question: "Can I review the profiles of workers before hiring them?", answer: "Yes, you can view detailed worker profiles, including their skills, experiences, and reviews from previous employers, to make informed hiring decisions." },

            // Add more FAQs as needed
        ];

        // Initial load of FAQs
        displayFAQs(faqs);

        function displayFAQs(faqsToShow) {
            const faqListContainer = document.getElementById('faqList');
            faqListContainer.innerHTML = '';

            faqsToShow.forEach(faq => {
                const faqCard = document.createElement('div');
                faqCard.classList.add('mb-4', 'p-4', 'bg-gray-700', 'rounded-md');

                const questionElement = document.createElement('h3');
                questionElement.classList.add('text-lg', 'font-semibold','text-gray-100', 'mb-2');
                questionElement.textContent = faq.question;

                const answerElement = document.createElement('p');
                answerElement.classList.add('text-gray-300','text-justify','font-semibold');
                answerElement.textContent = faq.answer;

                faqCard.appendChild(questionElement);
                faqCard.appendChild(answerElement);

                faqListContainer.appendChild(faqCard);
            });
        }

        function filterFAQs() {
            const searchTerm = document.getElementById('search').value.toLowerCase();
            const filteredFAQs = faqs.filter(faq => faq.question.toLowerCase().includes(searchTerm) || faq.answer.toLowerCase().includes(searchTerm));

            displayFAQs(filteredFAQs);
        }
    </script>
</body>

</html>
