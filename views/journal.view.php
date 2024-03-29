<!DOCTYPE html>
<html lang="en">
<head>
<?php require('partials/head.php')?>
</head>
<body id="body" class="no-transition">
<?php require('partials/header.php')?>

    <main>
  
                <section class="journal-one-section">
                    <div class="journal-one-container">
                        <div class="journal-one-wrapper">
                            <div class="journal-one-text">
                                <hr class="journal-one-text-lines" id="journal-hr-left">
                                <hgroup class="journal-one-headings">
                                    <h1>DOMAIN JOURNAL</h1>
                                    <p>welcome to the surf culture</p>
                                </hgroup>
                                <hr class="journal-one-text-lines" id="journal-hr-right">
                            </div>
                            <div class="journal-one-hero">
                                <div class="journal-one-hero-wrapper">
                                    <div class="journal-one-hero-poloroids">
                                        <div class="journal-one-poloroid-front" id="journal-poloroid-one">
                                            <img src=<?=imagePath($journal,1)?>>
                                            
                                        </div>
                                        <div class="journal-one-poloroid-front" id="journal-poloroid-two">
                                            <img src=<?=imagePath($journal,2)?>>
                                        </div>
                                        <div class="journal-one-poloroid-front" id="journal-poloroid-three">
                                            <img src=<?=imagePath($journal,3)?>>
                                        </div>
                                        <div class="journal-one-poloroid-back" id="journal-poloroid-four">
                                            <img src=<?=imagePath($journal,4)?>>
                                        </div>
                                        <div class="journal-one-poloroid-back" id="journal-poloroid-five">
                                            <img src=<?=imagePath($journal,5)?>>
                                        </div>
                                        <div class="journal-one-poloroid-back" id="journal-poloroid-six">
                                            
                                            <img src=<?=imagePath($journal,6)?>>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
                <section class="journal-two-section" >
                    <div class="journal-two-container">
                        <div class="journal-two-wrapper">
                            <div class="journal-two-top">
                                <div class="journal-two-top-text-container">
                                    <h2>Recent Journal Entries</h2>
                                    <span class="journal-page">Page 
                                    <?php if(!isset($_GET['page'])): ?>
                                        <?=1?>
                                    <?php else: ?>
                                        <?=$_GET['page']?>
                                    <?php endif; ?>
                                       
                                    </span>
                                </div>
                               <div class="journal-two-text-line">
                                <hr>
                               </div>
                                
                            </div>
                            <?php view('partials/journals.php',['journals' => $journals, 'journal' => $journal]); ?>
                            <div class="journal-two-bottom">
                                <div class="journal-two-text-line">
                                    <hr>
                                   </div>
                            </div>
                        </div>
                    </div>
                  
                </section>
        
        
        <div class="page-numbers" id="change">
           <?php view('partials/pagination.php',['totalPages' => $totalPages])?>
        </div>


       
        
    </main>
    <?php require('partials/footer.php') ?>
    <script src="Assests/Scripts/headerButtons.js"></script>
</body>
</html>