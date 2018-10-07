<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Username</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
    </div>
    <div class="form-group">
        <label for="notes">Notes</label>
        <textarea class="form-control" id="notes" rows="3" name="notes"></textarea>
    </div>
    <input type="submit" class="btn btn-primary">
</form>