<div class="flex items-center justify-center h-fit bg-gray-100 p-4">
    <div class="bg-white shadow-lg rounded-lg p-2 max-w-md w-full">
        <h2 class="text-2xl font-semibold mb-6 text-center">NGO EMI Calculator</h2>
        <form class="space-y-4">
            <div class="flex flex-col">
                <label for="loan_amount" class="text-gray-700 font-semibold mb-2">Loan Amount</label>
                <input type="number" id="loan_amount" name="loan_amount"
                    class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Loan Amount" required>
            </div>

            <div class="flex flex-col">
                <label for="tenure" class="text-gray-700 font-semibold mb-2">Tenure (in months)</label>
                <input type="number" id="tenure" name="tenure"
                    class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Loan Tenure" required>
            </div>

            <div class="flex flex-col">
                <label for="interest_rate" class="text-gray-700 font-semibold mb-2">Interest Rate (%)</label>
                <input type="number" id="interest_rate" name="interest_rate"
                    class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:border-blue-500"
                    placeholder="Enter Interest Rate" required>
            </div>

            <div class="flex items-center justify-center">
                <button type="button" onclick="calculateEMI()"
                    class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-600">Calculate
                    EMI</button>
            </div>
        </form>

        <div class="mt-4" id="emi_result" style="display: none;">
            <p class="text-lg font-semibold text-center" id="emi_result_text"></p>
        </div>
    </div>
</div>

<script>
    function calculateEMI() {
        // Get values from input fields
        const loanAmount = parseFloat(document.getElementById('loan_amount').value);
        const tenure = parseInt(document.getElementById('tenure').value);
        const interestRate = parseFloat(document.getElementById('interest_rate').value);

        // Calculate EMI
        const monthlyInterest = (interestRate / 12) / 100;
        const emi = (loanAmount * monthlyInterest) / (1 - Math.pow(1 + monthlyInterest, -tenure));

        // Display result
        const emiResultElement = document.getElementById('emi_result');
        const emiResultTextElement = document.getElementById('emi_result_text');
        emiResultTextElement.textContent = `Your EMI is: tk${emi.toFixed(2)} per month`;
        emiResultElement.style.display = 'block';
    }
</script>
