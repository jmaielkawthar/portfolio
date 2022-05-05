<section class="skills" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2 class="mb-4">Experiences</h2>
                <div class="timeline">
                    <?php foreach ($items as $item) { ?>
                        <div class="timeline-wrapper">
                            <div class="timeline-yr">
                                <span>
                                    <?php if( !empty( $item['year'] ) ): ?>
                                    <div class="title-1"> <?php echo $item['year'] ?></div>
                                    <?php endif; ?>
                                </span>
                            </div>
                            <div class="timeline-info">
                                <?php if( !empty( $item['headline'] ) ): ?>
                                <h3><?php echo $item['headline'] ?></h3>
                                <?php endif; ?>
                                <?php if( !empty( $item['text'] ) ): ?>
                                <p> <?php echo $item['text'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <h2 class="mb-4 mobile-mt-2">Educations</h2>
                <div class="timeline">
                    <div class="timeline-wrapper">
                        <div class="timeline-yr">
                            <span>2017</span>
                        </div>
                        <div class="timeline-info">
                            <h3><span>Mobile Web</span><small>Master Design</small></h3>
                            <p>Please tell your friends about Tooplate website. That would be very helpful. We need your
                                support.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
