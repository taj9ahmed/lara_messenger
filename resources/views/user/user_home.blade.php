@extends('layouts.app')

@section('content')

@endsection

    @section('contact list')
           <div>
            <span>
                <label for="selectUser" style="width:30%">Contacts</label>
                <label for="chatContent">Chat Contents</label>
                
            </span>
            </div>
            <div>
            <span>
            <select multiple size = "5" name="selectUser" id="" style="width:30%">
                @forelse($users as $user)
                    @if(Auth()->user()->id !== $user->id)
                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                    @endif
                    
                @empty
                        <option>No Contacts to Display</option>
                @endforelse
                </select>
                
                <select multiple size = "5" name="chatContent" id="" style="width:30%">
                @forelse($users as $user)
                    
                        <option value=""></option>
                    
                @empty
                        <option>No Contacts to Display</option>
                @endforelse
                </select>
            </span>
        </div>
        <div>
            <form action="">
                <input type="text" style="width:30%">
        </div>
        <div>
                <button type="submit">Send</button>
            </form>
        </div>
    @endsection


