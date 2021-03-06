@extends('layouts.app')

@section('content')
    <main lass="sm:container sm:mx-auto sm:pt-5">
        <div class="lg:pl-64 pr-64">
            <div class="flex gap-4 text-white font-semibold my-5">
                <div>
                    <button class="flex items-center gap-2 py-3 px-4 bg-gray-400 rounded-md font-semibold"
                        onclick="window.location='{{ route('home') }}'">
                        <i class="fa fa-home"></i>
                        Trang chủ
                    </button>
                </div>

                <div>
                    <button class="flex items-center gap-2 py-3 px-4 bg-orange-400 rounded-md font-semibold"
                        onclick="window.location='{{ route('showAllPosts') }}'">
                        <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.02704 2.05409C1.59426 2.05409 2.05409 1.59426 2.05409 1.02704C2.05409 0.459823 1.59426 0 1.02704 0C0.459823 0 0 0.459823 0 1.02704C0 1.59426 0.459823 2.05409 1.02704 2.05409Z"
                                fill="white" />
                            <path
                                d="M1.02704 6.16227C1.59426 6.16227 2.05409 5.70245 2.05409 5.13523C2.05409 4.56801 1.59426 4.10818 1.02704 4.10818C0.459823 4.10818 0 4.56801 0 5.13523C0 5.70245 0.459823 6.16227 1.02704 6.16227Z"
                                fill="white" />
                            <path
                                d="M1.02704 10.2705C1.59426 10.2705 2.05409 9.81063 2.05409 9.24341C2.05409 8.67619 1.59426 8.21637 1.02704 8.21637C0.459823 8.21637 0 8.67619 0 9.24341C0 9.81063 0.459823 10.2705 1.02704 10.2705Z"
                                fill="white" />
                            <path
                                d="M15 0.939731C15 0.803536 14.9459 0.67292 14.8496 0.576616C14.7533 0.480312 14.6227 0.426208 14.4865 0.426208H3.48682V1.45325H14.4865C14.6227 1.45325 14.7533 1.39915 14.8496 1.30285C14.9459 1.20654 15 1.07593 15 0.939731Z"
                                fill="white" />
                            <path
                                d="M14.4865 4.53439H3.48682V5.56144H14.4865C14.6227 5.56144 14.7533 5.50733 14.8496 5.41103C14.9459 5.31473 15 5.18411 15 5.04792C15 4.91172 14.9459 4.7811 14.8496 4.6848C14.7533 4.5885 14.6227 4.53439 14.4865 4.53439Z"
                                fill="white" />
                            <path
                                d="M14.4865 8.64258H3.48682V9.66962H14.4865C14.6227 9.66962 14.7533 9.61552 14.8496 9.51922C14.9459 9.42291 15 9.29229 15 9.1561C15 9.01991 14.9459 8.88929 14.8496 8.79298C14.7533 8.69668 14.6227 8.64258 14.4865 8.64258Z"
                                fill="white" />
                        </svg>
                        Danh sách</button>
                </div>

                <div>
                    <button class="flex items-center gap-2 py-3 px-4 bg-green-400 rounded-md font-semibold"
                        onclick="window.location='{{ route('showWord') }}'">
                        <svg width="12" height="9" viewBox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 0.5C0 0.367392 0.0526785 0.240215 0.146447 0.146447C0.240215 0.0526785 0.367392 0 0.5 0H8.5C8.63261 0 8.75979 0.0526785 8.85355 0.146447C8.94732 0.240215 9 0.367392 9 0.5C9 0.632608 8.94732 0.759785 8.85355 0.853553C8.75979 0.947321 8.63261 1 8.5 1H0.5C0.367392 1 0.240215 0.947321 0.146447 0.853553C0.0526785 0.759785 0 0.632608 0 0.5ZM0 8.5C0 8.36739 0.0526785 8.24021 0.146447 8.14645C0.240215 8.05268 0.367392 8 0.5 8H7.5C7.63261 8 7.75979 8.05268 7.85355 8.14645C7.94732 8.24021 8 8.36739 8 8.5C8 8.63261 7.94732 8.75979 7.85355 8.85355C7.75979 8.94732 7.63261 9 7.5 9H0.5C0.367392 9 0.240215 8.94732 0.146447 8.85355C0.0526785 8.75979 0 8.63261 0 8.5ZM0.5 4C0.367392 4 0.240215 4.05268 0.146447 4.14645C0.0526785 4.24021 0 4.36739 0 4.5C0 4.63261 0.0526785 4.75979 0.146447 4.85355C0.240215 4.94732 0.367392 5 0.5 5H11.5C11.6326 5 11.7598 4.94732 11.8536 4.85355C11.9473 4.75979 12 4.63261 12 4.5C12 4.36739 11.9473 4.24021 11.8536 4.14645C11.7598 4.05268 11.6326 4 11.5 4H0.5Z"
                                fill="white" />
                        </svg>
                        Từ khóa</button>
                </div>
            </div>

            <form action="{{ route('addWord') }}" method="POST" class="flex gap-6 my-5" enctype="multipart/form-data">
                @csrf
                <input name="wordToAdd" type="text" class="form-input text-white px-3 w-1/3"
                    style="background: #181A1B; border: 1px solid #4f4f4f" placeholder="Nhập từ khóa">
                <button class="bg-blue-500 text-white py-3 px-13 font-semibold rounded-md hover:bg-blue-600">Thêm</button>

                @if (session()->has('message'))
                    <div class="flex justify-center items-center py-2 px-4 bg-white rounded-md text-green-700 bg-green-100 border border-green-300"
                        id="success-notification" style="display: none">
                        <div slot="avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="font-normal max-w-full">{{ session()->get('message') }}</div>
                    </div>
                @elseif (session()->has('errMessage'))
                    <div class="flex justify-center items-center font-medium py-2 px-4 bg-white rounded-md text-red-700 bg-red-100 border border-red-300"
                        style="display: none" id="success-notification">
                        <div slot="avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-alert-octagon w-5 h-5 mx-2">
                                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                </polygon>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </div>
                        <div class="font-normal max-w-full flex-initial">{{ session()->get('errMessage') }}</div>
                    </div>
                @endif
            </form>

            <div class="flex flex-wrap gap-3">
                @foreach ($invalidWords as $word)
                    <form class="flex gap-2 py-2 px-3 rounded-md text-white font-normal" style="background: #363636"
                        method="POST" action="{{ route('deleteWord', ['id' => $word->id]) }}">
                        @csrf
                        @method('delete')

                        <input type="text" hidden name="invalidWord" value="{{ $word->word }}"
                            disabled>{{ $word->word }}
                        <button type="submit">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="iconDelete">
                                <path
                                    d="M16 8.16125C16 10.283 15.1571 12.3178 13.6569 13.8181C12.1566 15.3184 10.1217 16.1613 8 16.1613C5.87827 16.1613 3.84344 15.3184 2.34315 13.8181C0.842855 12.3178 0 10.283 0 8.16125C0 6.03952 0.842855 4.00469 2.34315 2.5044C3.84344 1.00411 5.87827 0.161255 8 0.161255C10.1217 0.161255 12.1566 1.00411 13.6569 2.5044C15.1571 4.00469 16 6.03952 16 8.16125ZM5.354 4.80725C5.26011 4.71337 5.13278 4.66062 5 4.66062C4.86722 4.66062 4.73989 4.71337 4.646 4.80725C4.55211 4.90114 4.49937 5.02848 4.49937 5.16125C4.49937 5.29403 4.55211 5.42137 4.646 5.51525L7.293 8.16125L4.646 10.8073C4.59951 10.8537 4.56264 10.9089 4.53748 10.9697C4.51232 11.0304 4.49937 11.0955 4.49937 11.1613C4.49937 11.227 4.51232 11.2921 4.53748 11.3528C4.56264 11.4136 4.59951 11.4688 4.646 11.5153C4.73989 11.6091 4.86722 11.6619 5 11.6619C5.06574 11.6619 5.13084 11.6489 5.19158 11.6238C5.25232 11.5986 5.30751 11.5617 5.354 11.5153L8 8.86825L10.646 11.5153C10.6925 11.5617 10.7477 11.5986 10.8084 11.6238C10.8692 11.6489 10.9343 11.6619 11 11.6619C11.0657 11.6619 11.1308 11.6489 11.1916 11.6238C11.2523 11.5986 11.3075 11.5617 11.354 11.5153C11.4005 11.4688 11.4374 11.4136 11.4625 11.3528C11.4877 11.2921 11.5006 11.227 11.5006 11.1613C11.5006 11.0955 11.4877 11.0304 11.4625 10.9697C11.4374 10.9089 11.4005 10.8537 11.354 10.8073L8.707 8.16125L11.354 5.51525C11.4005 5.46877 11.4374 5.41358 11.4625 5.35284C11.4877 5.2921 11.5006 5.227 11.5006 5.16125C11.5006 5.09551 11.4877 5.03041 11.4625 4.96967C11.4374 4.90893 11.4005 4.85374 11.354 4.80725C11.3075 4.76077 11.2523 4.72389 11.1916 4.69873C11.1308 4.67357 11.0657 4.66062 11 4.66062C10.9343 4.66062 10.8692 4.67357 10.8084 4.69873C10.7477 4.72389 10.6925 4.76077 10.646 4.80725L8 7.45426L5.354 4.80725Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </form>
                @endforeach
            </div>
        </div>
        <script>
            $('#success-notification').fadeIn('100', function() {
                $('#success-notification').delay(3000).fadeOut()
            })
        </script>
    </main>
@endsection
