<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b><?php echo e(__('Create Page')); ?></b> </h3>
                <a class="btn btn-primary  btn-sm" href="<?php echo e(route('back.page.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
                </div>
        </div>
    </div>

	<!-- Form -->
	<div class="row">

		<div class="col-xl-12 col-lg-12 col-md-12">

			<div class="card o-hidden border-0 shadow-lg">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="p-5">
								<form class="admin-form" action="<?php echo e(route('back.page.store')); ?>" method="POST"
									enctype="multipart/form-data">

                                    <?php echo csrf_field(); ?>

									<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

									<div class="form-group">
										<label for="title"><?php echo e(__('Title')); ?> *</label>
										<input type="text" name="title" class="form-control" id="title"
											placeholder="<?php echo e(__('Enter Title')); ?>" value="<?php echo e(old('title')); ?>" required>
									</div>

									<div class="form-group">
										<input type="text" name="slug" class="form-control" id="slug"
											placeholder="<?php echo e(__('Enter Slug')); ?>" value="<?php echo e(old('slug')); ?>" required>
									</div>

									<div class="form-group">
										<label for="name">Set Image *</label>
										<br>
											<img class="admin-img" src="<?php echo e(asset('assets/images/placeholder.png')); ?>" alt="No Image Found">
										<br>
										<span class="mt-1">Image Size Should Be (Minimum 1200) x 350.</span>
									</div>

									<div class="form-group">
										<label for=""></label>
										<label class="file">
											<input type="file" accept="image/*" class="upload-photo" name="banner" id="file" aria-label="File browser example">
											<span class="file-custom text-left">Upload Image...</span>
										</label>
                                    </div>

									<div class="form-group">
										<label for="details"><?php echo e(__('Details')); ?> *</label>
										<textarea name="details" id="details" class="form-control text-editor" rows="5"
											placeholder="<?php echo e(__('Enter Details')); ?>"
											required><?php echo e(old('details')); ?></textarea>
									</div>

									<div class="form-group">
										<label for="html"><?php echo e(__('HTML')); ?> *</label>
										<textarea name="html" id="html" class="form-control" rows="10"
											placeholder="<?php echo e(__('Enter HTML')); ?>"
											required><?php echo e(old('html')); ?></textarea>
									</div>

									<div class="form-group">
										<label for="meta_keywords"><?php echo e(__('Meta Keywords')); ?>

											</label>
										<input type="text" name="meta_keywords" class="form-control tags"
											id="meta_keywords"
											placeholder="<?php echo e(__('Enter Meta Keywords')); ?>"
											value="">
									</div>

									<div class="form-group">
										<label
											for="meta_description"><?php echo e(__('Meta Description')); ?>

											</label>
										<textarea name="meta_descriptions" id="meta_description"
											class="form-control" rows="5"
											placeholder="<?php echo e(__('Enter Meta Description')); ?>"
										></textarea>
									</div>

									<div class="form-group text-center">
										<button type="submit" class="btn btn-secondary"><?php echo e(__('Submit')); ?></button>
									</div>

									<div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/harrison/core/resources/views/back/page/create.blade.php ENDPATH**/ ?>