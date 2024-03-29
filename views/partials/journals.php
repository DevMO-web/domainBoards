<?php 

//While loop
while($journalEntry = $journals->fetch(PDO::FETCH_ASSOC)) : ?>
    <div class="journal-two-main">
        <div class="journal-two-main-entries" id="journal-entry-one">
            <div class="journal-two-main-entry-left">
                <div class="journal-background">
                    <img src=<?=imagePath($journal,$journalEntry['id'])?>>
                    <div class="journal-background-layer">

                    </div>
                </div>
              
                
            </div>
            <div class="journal-two-main-entry-right">
                <div class="journal-two-entry-text-container">
                    <hgroup class="journal-two-hgroup">
                        <h3><?= $journalEntry['title']?></h3>
                        <p>
                        <?= $journalEntry['Desc']?>
                        </p>

                        
                    
                        
                     
                   
                    </hgroup>
                    <div class="journal-two-button">

                    <button class="journal-entry-btn"><a href="/journalRead?id=<?= $journalEntry['id']?>"><label>read more</label></a></button>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <?php endwhile; ?>

    <?php
/*



//Shorthand For Eachloop. Best used for html.

//$journals = $db->query("SELECT * from posts limit $start, $rowsPerPage")->fetchAll(); This code needs to be changed inorder for the foreach loop to work
foreach($journals as $journalEntry) : ?>
                            <div class="journal-two-main">
                                <div class="journal-two-main-entries" id="journal-entry-one">
                                    <div class="journal-two-main-entry-left">
                                        <div class="journal-background">
                                            <img src=<?=imagePath($journal,$journalEntry['id'])?>>
                                            <div class="journal-background-layer">
         
                                            </div>
                                        </div>
                                      
                                        
                                    </div>
                                    <div class="journal-two-main-entry-right">
                                        <div class="journal-two-entry-text-container">
                                            <hgroup class="journal-two-hgroup">
                                                <h3><?= $journalEntry['title']?></h3>
                                                <p>
                                                <?= $journalEntry['Desc']?>
                                                </p>
                                                <button class="journal-entry-btn"><a href="/journalRead?id=<?= $journalEntry['id']?>"><label>read more</label></a></button>
                                            </hgroup>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>

<?php endforeach; ?>

*/