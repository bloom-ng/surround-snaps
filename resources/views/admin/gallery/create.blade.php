<x-admin-layout title="Admin | Add Media" page="gallery">

    <main class="w-full flex-grow p-6">
        <div class="flex justify-between md:items-center gap-y-4 flex-col md:flex-row w-full">
            <div>
                <p class="block antialiased font-sans text-base font-light leading-relaxed text-inherit font-bold">
                    New Media
                </p>
                <p
                    class="block antialiased text-sm font-sans text-base font-light leading-relaxed text-inherit font-normal text-gray-600">
                    Upload a new media
                </p>
            </div>
            <div>
                <a type="button" href="/admin/galleries"
                    class="align-middle select-none font-sans font-bold text-center capitalize transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-[#1b998b] text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                    type="button" data-ripple-light="true">
                    Gallery
                </a>
            </div>

        </div>

        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                <p class="text-xl pb-6 flex items-center">
                </p>
                <div class="leading-loose">
                    <form class="" method="POST" action="/admin/galleries" enctype="multipart/form-data">
                        @csrf
                        <div class="pb-2">
                            <label class=" block  text-sm pb-1" for="title">Caption</label>
                            <input
                                class="px-2 block ring-1 ring-inset ring-gray-300 w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 "
                                id="title" name="title" type="text" required placeholder="Caption"
                                aria-label="Caption">
                        </div>
                        <div class="pb-2">
                            <label class=" block  text-sm pb-1" for="name">Media Type</label>
                            <select
                                class="px-2 block ring-1 ring-inset ring-gray-300 w-full border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 "
                                id="type" name="type" type="type" required placeholder=""
                                aria-label="Media Type">
                                @foreach (\App\Models\Gallery::getTypeMapping() as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach

                            </select>

                        </div>




                        <div class="col-span-full mt-6 hidden" id="media-container">
                            <label for="document" class="block text-sm font-medium leading-6 text-gray-900">Media
                            </label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <img id="preview" class="mx-auto h-32 w-32 object-cover hidden mb-4"
                                        src="" alt="Preview">
                                    <p id="file-added" class="text-sm leading-6 text-gray-600 "> </p>
                                    <div class="mt-4 flex text-sm leading-6 text-gray-600 flex-col">
                                        <label for="doc"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span>Upload Media</span>
                                            <input class="sr-only" accept="image/*, video/*" id="doc"
                                                name="doc" type="file" onchange="previewFile()">
                                        </label>
                                        <p class="text-xs leading-5 text-gray-600 ">Media up to 20MB
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function previewFile() {
                                    const preview = document.getElementById('preview');
                                    const file = document.querySelector('input[type=file]').files[0];
                                    const reader = new FileReader();

                                    reader.onloadend = function() {
                                        preview.src = reader.result;
                                        preview.classList.remove('hidden');
                                    }

                                    if (file) {
                                        reader.readAsDataURL(file);
                                    } else {
                                        preview.src = "";
                                        preview.classList.add('hidden');
                                    }
                                }
                            </script>

                        </div>

                        <div class="col-span-full mt-8 " id="embed-container">
                            <label for="summary" class="block text-sm font-medium leading-6 text-gray-900">Embed Code
                            </label>

                            <textarea id="value" name="value" rows="6"
                                class="block w-full font-mono border-0 bg-transparent px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>

                        <div class="mt-6">
                            <button
                                class="rounded-md bg-[#1b998b] px-3 py-2 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#1b998b]"
                                type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>


        <script>
            const docInput = document.getElementById('doc');
            const docNotification = document.getElementById('file-added');
            const mediaType = document.getElementById('type');
            const mediaContainer = document.getElementById('media-container');
            const embedContainer = document.getElementById('embed-container');
            const embedValue = document.getElementById('value');



            docInput.addEventListener('change', (e) => {
                const file = docInput.files[0];
                console.log('file :>> ', file);
                const reader = new FileReader();

                docNotification.innerHTML = file.name;
                reader.onload = (event) => {};

                reader.readAsDataURL(file);
            });


            mediaType.addEventListener('change', (e) => {
                // if media type is image or video
                if (mediaType.value == {{ App\Models\Gallery::TYPE_IMAGE }} || mediaType.value ==
                    {{ App\Models\Gallery::TYPE_VIDEO }}) {
                    mediaContainer.classList.remove('hidden');
                    embedContainer.classList.add('hidden');
                } else {
                    mediaContainer.classList.add('hidden');
                    embedContainer.classList.remove('hidden');
                }
            });
        </script>

</x-admin-layout>
