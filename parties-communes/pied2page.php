<footer>
            <h2>teeTIM</h2>
            <div class="contenu">
                <section class="achats">
                    <h3><?=$_pp->achatsTitre?></h3>
                    <nav>
                        <a href="faq.com" class="faq"><?=$_pp->navAchatsFaq?></a>
                        <a href="livraison.php" class="livraison"><?=$_pp->navAchatsLivraison?></a>
                        <a href="conditions.php" class="conditions"><?=$_pp->navAchatsConditions?></a>
                        <a href="confidentialite.php" class="confidentialite"><?=$_pp->navAchatsConfidentialite?></a>
                    </nav>
                </section>
                <section class="apropos">
                    <h3><?=$_pp->aProposTitre?></h3>
                    <nav>
                        <a href="compagnie.com" class="faq"><?=$_pp->aProposCompagnie?></a>
                        <a href="equipe.php" class="livraison"><?=$_pp->aProposEquipe?></a>
                        <a href="emploi.php" class="conditions"><?=$_pp->aProposEmplois?></a>
                    </nav>
                </section>
                <section class="coordonnees">
                    <h3><?=$_pp->joindreTitre?></h3>
                    <nav>
                        <span><?=$_pp->joindreTelEtiquette?> <b>1 866 888 6666</b></span>
                        <span><?=$_pp->joindreCourrielEtiquette?> aide@teetim.ca</span>
                    </nav>
                </section>
            </div>
            <p class="da">&copy; <?=$_pp->droits?> <?php echo date("Y")?></p>
        </footer>
    </div>
    
</body>
</html>