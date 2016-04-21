 <article class="ui card">
    <div class="content h-card">
        <h1 class="header p-name">
            <a href="{{ route('organization.show', ['id' => $organization->id]) }}">
                {{ $organization->nickname or $organization->name }}
            </a>
        </h1>
    </div>
 </article>