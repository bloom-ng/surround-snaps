<x-admin-layout title="Admin | Contact" page="contacts">

    <main class="w-full flex-grow p-6">

        <div class="w-full my-4">

            <section class="container mx-auto py-8">
                <div class="flex gap-y-4 flex-col ">
                    <div class="flex justify-between md:items-center gap-y-4 flex-col md:flex-row w-full">
                        <div>
                            <p
                                class="block antialiased font-sans text-base font-light leading-relaxed text-inherit font-bold">
                                Contacts
                            </p>
                            <p
                                class="block antialiased text-sm font-sans text-base font-light leading-relaxed text-inherit font-normal text-gray-600">
                                See all contact messages
                            </p>
                        </div>
                    </div>
                    <div class=" justify-start md:justify-end gap-2">
                        <form method="GET">
                            <div class="lg:w-96">
                                <div class="relative w-full min-w-[200px] h-10">

                                    <div
                                        class="grid place-items-center absolute text-blue-gray-500 top-2/4 right-3 -translate-y-2/4 w-5 h-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true" class="h-5 w-5">
                                            <path fill-rule="evenodd"
                                                d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input
                                        class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent placeholder:opacity-0 focus:placeholder:opacity-100 text-sm px-3 py-2.5 rounded-[7px] !pr-9 border-blue-gray-200 focus:border-gray-900"
                                        placeholder=" " name="search" /><label
                                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">Search<!-- -->
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>


            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="">
                        <tr>
                            {{-- <th class="border-b border-gray-300 !p-4 pb-8 !text-left ">
                                <p
                                    class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                    ID
                                </p>
                            </th> --}}
                            <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                                <p
                                    class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                    Name
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                                <p
                                    class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                    Email
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                                <p
                                    class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                    Message
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                                <p
                                    class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                    Phone
                                </p>
                            </th>
                            <th class="border-b border-gray-300 !p-4 pb-8 !text-left">
                                <p
                                    class="block antialiased font-sans text-xs font-light leading-normal text-blue-gray-900 !font-bold">
                                    Actions
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-xs">
                        @foreach ($contacts as $contact)
                            <tr>
                                {{-- <td class="w-1/3 text-left py-3 px-4">
                                    {{ $contact->id }}
                                </td> --}}
                                <td class="w-1/3 text-left py-3 px-4">
                                    {{ $contact->name }}
                                </td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    {{ $contact->email }}
                                </td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    {{ $contact->message }}
                                </td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    {{ $contact->phone }}
                                </td>


                                <td class="w-1/3 text-left py-3 px-4">
                                    {{-- <a class="pr-2 text-blue-300 hover:text-blue-500"
                                        href="/admin/galleries/{{ $contact->id }}/edit">
                                        Edit
                                    </a> --}}
                                    <form id="contact-delete-{{ $contact->id }}"
                                        action="/admin/contacts/{{ $contact->id }}" method="POST"
                                        style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $contacts->links() }}
            </div>
        </div>
    </main>

    <script>
        @foreach ($contacts as $contact)
            const form{{ $contact->id }} = document.getElementById('contact-delete-{{ $contact->id }}');

            form{{ $contact->id }}.addEventListener('submit', (e) => {
                e.preventDefault();
                const confirmSubmit = confirm('Proceed to delete?');
                if (confirmSubmit) {
                    form{{ $contact->id }}.submit();
                }
            });
        @endforeach
    </script>

</x-admin-layout>
