<div class="name">
    <label for="name">Name</label>
    <input type="name" name="name" value="{{$user->name ?? ''}}">
</div>
<div class="email">
    <label for="email">Email</label>
    <input type="email" name="email" value="{{$user->email ?? ''}}">
</div>
<div class="phone">
    <label for="name">Phone</label>
    <input type="tel" name="phone" value="{{$user->phone ?? ''}}">
</div>