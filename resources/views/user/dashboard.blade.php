@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                      @include('components.alert')
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        My Bootcamps
                    </h2>
                </div>
            </div>
            <div class="row my-5">
      
            {{-- {{ $checkouts }} --}}
                <table class="table">
                    <tbody>
                        @forelse($checkouts as $key => $checkout)
                              <tr class="align-middle">
                            <td width="18%">
                                <img src="{{ asset('images/item_bootcamp.png') }}" height="120" alt="">
                            </td>
                            <td>
                                <p class="mb-2">
                                    <strong> {{ $checkout->Camp->title }}</strong>
                                </p>
                                <p>
                                    {{ $checkout->Camp->created_at->format('D, d-m-Y') }}
                                </p>
                            </td>
                            <td>
                                <strong>${{ $checkout->Camp->price }}</strong>
                            </td>
                            <td>
                            {{-- <strong>${{ $checkout->payment_status}}</strong>     --}}
                               @if ($checkout->payment_status == 'waiting')
                               <a href ="{{$checkout->midtrans_url}}" class="btn btn-primary" target="blank">Bayar Sekarang </a>
                                @else
                                <strong class="text-success">Payment Succes</strong>
                                 @endif
                            </td>
                            <td>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    Get Support
                                </a>
                            </td>
                        </tr>

                        @empty
                            <tr>
                                <td colspan="5">
                                    <h3>No Camp Registered</h3>
                                </td>
                            </tr>
                            
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection