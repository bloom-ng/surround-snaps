<x-admin-layout title="Admin | Booking" page="bookings">
    <main class="w-full flex-grow p-6">
        {{-- Entire Booking Details --}}
        <div class="bg-white p-6 rounded-lg shadow-md max-w-2xl mx-auto my-8">
            <h1 class="text-2xl font-bold mb-6 text-center border-b pb-2">Booking Details</h1>
            <div class="grid grid-cols-2 gap-4">
                <div class="font-semibold">Full Name:</div>
                <div>{{ $booking->full_name }}</div>

                <div class="font-semibold">Contact Number:</div>
                <div>{{ $booking->contact_number }}</div>

                <div class="font-semibold">Email:</div>
                <div>{{ $booking->email }}</div>

                <div class="font-semibold">Event Type:</div>
                <div>{{ $booking->event_type }}</div>

                <div class="font-semibold">Event Date:</div>
                <div>{{ $booking->event_date }}</div>

                <div class="font-semibold">Event Start Time:</div>
                <div>{{ $booking->event_start_time }}</div>

                <div class="font-semibold">Venue Address:</div>
                <div>{{ $booking->venue_address }}</div>

                <div class="font-semibold">Venue Type:</div>
                <div>{{ $booking->venue_type }}</div>

                <div class="font-semibold">Contact Person:</div>
                <div>{{ $booking->contact_person }}</div>

                <div class="font-semibold">Contact Person Phone:</div>
                <div>{{ $booking->contact_person_phone }}</div>

                <div class="font-semibold">Event Theme:</div>
                <div>{{ $booking->event_theme }}</div>

                <div class="font-semibold">Special Instructions:</div>
                <div>{{ $booking->special_instructions }}</div>

                <div class="font-semibold">Package:</div>
                <div>{{ $booking->package }}</div>

                <div class="font-semibold">Additional Hours:</div>
                <div>{{ $booking->additional_hours }}</div>

                <div class="font-semibold">Total Cost:</div>
                <div>{{ $booking->total_cost }}</div>

                <div class="font-semibold">Status:</div>
                <div>{{ $booking->status }}</div>
            </div>
        </div>

        {{-- Transactions --}}
        <div class="bg-white overflow-auto">
            <table class="min-w-full bg-white">
                <thead class="">
                    <tr>
                        <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                            <p
                                class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                ID
                            </p>
                        </th>
                        <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                            <p
                                class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                Amount
                            </p>
                        </th>
                        <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                            <p
                                class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                Status
                            </p>
                        </th>
                        <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                            <p
                                class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                Type
                            </p>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-xs">
                    @if ($transactions->isEmpty())
                        <tr>
                            <td colspan="4" class="text-center py-4">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                No transactions found for this booking.
                            </td>
                        </tr>
                    @else
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">
                                    {{ $transaction->id }}
                                </td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    {{ $transaction->amount }}
                                </td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    {{ $transaction->status }}
                                </td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    {{ $transaction->type }}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {{-- {{ $transaction->links() }} --}}
        </div>
    </main>
</x-admin-layout>
