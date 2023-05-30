<?php echo $__env->make('app.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    <div class="page">
        <!-- Navbar -->
        <?php echo $__env->make('app.inc.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">
            <!-- Page body -->
            <div class="page-body">
                <?php echo $__env->yieldContent("content"); ?>
                    <div class="empty">
                        <div class="empty-img"><img src="./static/illustrations/undraw_printing_invoices_5r4r.svg"
                                height="128" alt="">
                        </div>
                        <p class="empty-title">No results found</p>
                        <p class="empty-subtitle text-muted">
                            Try adjusting your search or filter to find what you're looking for.
                        </p>
                        <div class="empty-action">
                            <a href="./." class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                Add your first client
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('app.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>


    <script src="<?php echo e(asset("assets/dist/js/tabler.min.js")); ?>" defer></script>
    <script src="<?php echo e(asset("assets/dist/js/demo.min.js")); ?>" defer></script>
</body>

</html>
<?php /**PATH C:\laragon\www\smk\laravelBazma\laravelCRUD\resources\views/app/app.blade.php ENDPATH**/ ?>
