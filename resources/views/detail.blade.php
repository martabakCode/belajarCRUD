@extends('layout')
@section('title') Detail Toko Online @endsection
@section('content')
<div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-2xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://images.unsplash.com/photo-1674925202320-2d76022faeb4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Apple MacBook Pro 17"</h5>

        <h5 class="mb-2 text-md font-semibold tracking-tight text-gray-900 dark:text-white"><span class="font-bold">Rp. 17.500.000,00</span>  	&nbsp; (1 pcs) </h5>
        
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolor nemo similique inventore veritatis corrupti aliquid consequatur dolorem hic dolore eveniet, vitae neque? Quas dolorum facilis reprehenderit, rem enim minus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum laborum sapiente facere laudantium veritatis labore fugit impedit distinctio sint odio vitae nulla repellendus, natus consectetur, amet ratione facilis explicabo praesentium?</p>
    </div>
</div>
@endsection