@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
  <div class="col-md-9 col-lg-10">
    <div class="row mt-2">
      <div class="col-md-12">
        <div class="card-header bg-white">
          <h3 class="dashboard">Dashboard</h3>
          <hr>
        </div>
        <div class="card-body">
          <div class="row mb-2">

            {{-- Today's Orders --}}
            <div class="col-md-6 mb-2">
              <div class="card shadow-sm">
                <div class="card-header bg-white">
                  <div class="d-flex justify-content-between">
                    <strong class="badge bg-dark">Today's Orders</strong>
                    <span class="badge bg-dark">{{ $yesterdayOrders->count() }}</span>
                  </div>
                </div>
                <div class="card-footer bg-white text-center">
                  <div class="d-flex justify-content-between">
                    <strong>{{ $yesterdayOrders->sum('total') }}</strong>
                  </div>
                </div>
              </div>
            </div>

            {{-- Todays Orders --}}
            <div class="col-md-6 mb-2">
              <div class="card shadow-sm">
                <div class="card-header bg-white">
                  <div class="d-flex justify-content-between">
                    <strong class="badge bg-dark">Yesterday's Orders</strong>
                    <span class="badge bg-dark">{{ $yesterdayOrders->count() }}</span>
                  </div>
                </div>
                <div class="card-footer bg-white text-center">
                  <div class="d-flex justify-content-between">
                    <strong>{{ $yesterdayOrders->sum('total') }}</strong>
                  </div>
                </div>
              </div>
            </div>
            {{-- This Month Orders --}}
            <div class="col-md-6 mb-2">
              <div class="card shadow-sm">
                <div class="card-header bg-white">
                  <div class="d-flex justify-content-between">
                    <strong class="badge bg-dark">This Month Orders</strong>
                    <span class="badge bg-dark">{{ $monthOrders->count() }}</span>
                  </div>
                </div>
                <div class="card-footer bg-white text-center">
                  <div class="d-flex justify-content-between">
                    <strong>{{ $monthOrders->sum('total') }}</strong>
                  </div>
                </div>
              </div>
            </div>
            {{-- This Year Orders --}}
            <div class="col-md-6 mb-2">
              <div class="card shadow-sm">
                <div class="card-header bg-white">
                  <div class="d-flex justify-content-between">
                    <strong class="badge bg-dark">This Year Orders</strong>
                    <span class="badge bg-dark">{{ $yearOrders->count() }}</span>
                  </div>
                </div>
                <div class="card-footer bg-white text-center">
                  <div class="d-flex justify-content-between">
                    <strong>{{ $yearOrders->sum('total') }}</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
