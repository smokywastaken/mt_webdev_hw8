<div class="container">
    <div class="container-fluid">
        <nav class="d-flex flex-column button-group-vertical">
            <a href="{{ route('profile.show') }}" class="mb-2 btn btn-dark">
                Profile
            </a>
            <button class="mb-2 btn btn-dark">
                Saved
            </button>
            <a href="{{ route('logout') }}"
               class="btn btn-dark"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
    </div>
    <footer class="mt-4">
        <div class="alert alert-secondary text-center">
            2024. Website made by Mārtiņš Terentjevs
        </div>
    </footer>
</div>
