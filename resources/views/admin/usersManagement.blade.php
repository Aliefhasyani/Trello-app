<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="h4 fw-semibold mb-0 text-dark">
                <i class="bi bi-people-fill me-2"></i> {{ __('Admin Panel') }}
            </h2>
        </div>
    </x-slot>

    <div class="container-fluid py-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-0 fw-semibold">
                            <i class="bi bi-person-lines-fill me-2"></i> Users Management
                        </h5>
                        <div class="d-flex gap-4 mt-2">
                            <span class="text-muted small">
                                <i class="bi bi-people me-1"></i> Users: {{ $count_users }}
                            </span>
                            <span class="text-muted small">
                                <i class="bi bi-shield-lock me-1"></i> Admins: {{ $count_admins }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('admin.create') }}" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-lg me-1"></i> Add User
                        </a>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-sm ms-2">
                            <i class="bi bi-arrow-left me-1"></i> Back
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4">ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>ROLE</th>
                                <th class="text-end pe-4">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="ps-4">{{ $user->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-2">
                                            <div class="bg-light rounded-circle p-2">
                                                <i class="bi bi-person-fill text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <strong>{{ $user->name }}</strong>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge 
                                        {{ $user->role == 'admin' ? 'bg-primary' : 'bg-secondary' }}">
                                        {{ ucfirst($user->role) }}
                                    </span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('admin.edit', $user->id) }}" class="btn btn-sm btn-outline-warning">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.delete', $user->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                @if($user->role == 'admin') disabled @endif
                                                onclick="return confirm('Are you sure you want to delete this user?')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            @if($users instanceof \Illuminate\Pagination\LengthAwarePaginator && $users->total() > $users->perPage())
            <div class="card-footer bg-white border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="text-muted small">
                        Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} users
                    </div>
                    <div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>