<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <section>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
          <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-indigo-600">Sekolah menengah kejuruan kota bogor</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">SMK bisa, SMK hebat, siap kerja, santun, mandiri dan kreatif.</p>
            <p class="mt-6 text-lg leading-8 text-gray-600">Displin itu tidak perlu diawasi, bekerja itu tidak perlu disuruh, dan tanggung jawab itu tidak perlu diminta</p>
          </div>
          <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                @foreach ( $datasmk as $data)
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-gray-900">
                      <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0 3 3m-3-3-3 3M6.75 19.5a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
                        </svg>
                      </div>
                      {{ $data->jurusan }}
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-gray-600">{{ $data->deskripsi }}</dd>
                  </div>
                @endforeach
            </dl>
          </div>
        </div>
      </div>
      
  </section>
</body>
</html>