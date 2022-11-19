<x-admin-layout>
<div>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between border-b border-gray200 pt-2 pb-6">
                        <h2 class="text-4xl font-bold tracking-tight text-gray900">Program Menghitung Waktu Tempuh</h2>
                    </div>
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-10 mx-auto">
                            <div class="flex flex-wrap -m-4">
                                <div class="p-4 md:w-1/3">
                                    <form method="POST" action="/Aritmatika">
                                        @csrf
                                                <div class="form-group mb-6">
                                                    <label for="name" class="form-label inline-block mb-2 text-gray-700">Jarak Tempuh                                                                                            (Km)</label>
                                                    <input type="number" name="bil_1" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Angka">
                                                </div>
                                                <!-- <div class="form-group mb-6">
                                                    <label class" for="gender" class="form-label inline-block mb-2 text-gray-700">Operator</label>
                                                    <div class="relative flex w-full">
                                                        <select name="operator" class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"">
                                                            <option>Pilih Operator...</option>
                                                            <option value="penjumlahan">Penjumlahan</option>
                                                            <option value="pengurangan">Pengurangan</option>
                                                            <option value="perkalian">Perkalian</option>
                                                            <option value="pembagian">Pembagian</option>
                                                            <option value="modulus">Modulus</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                 <div class="form-group mb-6">
                                                    <label for="name" class="form-label inline-block mb-2 text-gray-700">Kecepatan (Km/jam)</label>
                                                    <input type="number" name="bil_2" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Angka">
                                                </div>
                                                <div>
                                                    <div>
                                                        @if(session('hasil'))
                                                    <div class="mb-6">
                                                        <h1>{{session('hasil')}}</h1>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                                <div class="mb-6">
                                            <button type="submit" class=" text-gray-400 font-medium bg-indigo-500 border py-2 px-4  hover:bg-indigo-600 rounded">
                                                Hitung
                                            </button>
                                        </div>
                                    </form>
                                </div>   
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
</div>
</x-admin-layout>