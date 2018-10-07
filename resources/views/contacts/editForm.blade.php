<form action="{{ route('contacts.update', $form->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Username</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name" value="{{ $form->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="{{ $form->email }}">
    </div>
    <div class="form-group">
        <label for="notes">Notes</label>
        <textarea class="form-control" id="notes" rows="3" name="notes">{{ $form->notes }}</textarea>
    </div>
    <input type="submit" class="btn btn-primary">
</form>