<footer class="c-footer text-muted">
    <div>
        <a href="/">{{app_name()}}</a>
        @if(setting('show_copyright'))
        @lang('Copyright') &copy; {{ date('Y') }}
        @endif
    </div>
</footer>
