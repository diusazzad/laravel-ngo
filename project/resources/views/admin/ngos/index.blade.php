<table class="min-w-full divide-y divide-gray-200">
    <thead class="bg-gray-50">
        <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SI No</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Father</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mother</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">AC/No</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Loan</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Interest</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Payments
            </th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Weekly Pay</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($users as $user)
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->si_no }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->father }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->mother }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->address }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->ac_no }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->loan }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->interest }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->time }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->total_payments }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $user->weekly_pay }}</td>
        </tr>
        @endforeach
    </tbody>
</table>