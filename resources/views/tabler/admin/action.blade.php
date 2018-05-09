

<a href="{{ route('admins.show', $user->id) }}" class="btn btn-primary">
	View
</a>

<form action="{{ route('admins.destroy', $user->id) }}" method="POST" style="display: inline;" 
		id="delete-form">
	{{ csrf_field() }} 
	{{ method_field('DELETE') }}
	
	<button type="submit" class="btn btn-danger btn-form display-4" id="delete-btn">
		Delete
	</button>
</form>