<div class="Box-row Box-row--small d-flex flex-justify-between">
    <div>
        <svg fill="currentColor" aria-label="directory" class="text-gray-light octicon octicon-file-directory" viewBox="0 0 14 16" version="1.1" width="14" height="16" role="img"><path fill-rule="evenodd" d="M13 4H7V3c0-.66-.31-1-1-1H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V5c0-.55-.45-1-1-1zM6 4H1V3h5v1z"></path></svg>
        <a>{{ $file }}</a>
    </div>
    <div class="text-gray">
        {{ $commit }}
    </div>
    <div class="text-gray">
        a month ago
    </div>
</div>
