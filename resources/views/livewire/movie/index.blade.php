<div>
    <div class="overflow-x-auto">
        <table class="table w-full">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Thumbnail</th>
                    <th>Title</th>
                    <th>Sinopsis</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->results as $key => $item)
                <tr>
                    <th>{{ $key+1 }}</th>
                    <td>
                        <img src="https://image.tmdb.org/t/p/original{{ $item->poster_path }}" alt=""
                            class="h-64 w-full object-contain">
                    </td>
                    <td>{{ $item->original_title }}</td>
                    <td class="whitespace-normal truncate">
                        <!-- The button to open modal -->
                        <label for="my-modal-{{ $key+1 }}" class="px-6 py-2 flex space-x-2 items-center hover:cursor-pointer">
                            <span>Sinopsis Film {{ $item->original_title }}</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="8" cy="8.00004" r="5.91667" stroke="#1B1B1B" stroke-width="1.5" />
                                <rect x="7.41667" y="7" width="1.16667" height="4.91667" rx="0.583333" fill="#1B1B1B"
                                    stroke="#1B1B1B" stroke-width="0.5" />
                                <rect x="7.41667" y="4.5" width="1.16667" height="1.16667" rx="0.583333" fill="#1B1B1B"
                                    stroke="#1B1B1B" stroke-width="0.5" />
                            </svg>

                        </label>

                        <!-- Put this part before </body> tag -->
                        <input type="checkbox" id="my-modal-{{ $key+1 }}" class="modal-toggle" />
                        <div class="modal">
                            <div class="modal-box">
                                <h3 class="font-bold text-lg">{{ $item->original_title }}</h3>
                                <p class="py-4">
                                    {{ $item->overview }}
                                </p>
                                <div class="modal-action">
                                    <label for="my-modal-{{ $key+1 }}" class="bg-slate-500 rounded-full px-6 py-2 text-white hover:cursor-pointer">Tutup</label>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
