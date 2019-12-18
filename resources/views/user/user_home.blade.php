@extends('layouts.app')

@section('content')

@endsection

    @section('contact list')
           <div>
            <span>
                <label for="selectUser">Contacts</label>
                <select multiple size = "5" name="selectUser" id="" style="width:30%">
                @forelse($users as $user)
                    @if(Auth()->user()->id !== $user->id)
                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                    @endif
                    
                @empty
                        <option>No Contacts to Display</option>
                @endforelse
                </select>
            </span>
            <span>
                <label for="chatContent">Chat Contents</label>
                <select multiple size = "5" name="chatContent" id="" style="width:30%">
                @forelse($users as $user)
                    
                        <option value=""></option>
                    
                @empty
                        <option>No Contacts to Display</option>
                @endforelse
                </select>
            </span>
        </div>
    @endsection


