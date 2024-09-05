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
                    <h3>À propos de teeTIM</h3>
                    <nav>
                        <a href="compagnie.com" class="faq">La compagnie</a>
                        <a href="equipe.php" class="livraison">L'équipe</a>
                        <a href="emploi.php" class="conditions">Emplois</a>
                    </nav>
                </section>
                <section class="coordonnees">
                    <h3>Nous joindre</h3>
                    <nav>
                        <span>Sans frais : <b>1 866 888 6666</b></span>
                        <span>Courriel : aide@teetim.ca</span>
                    </nav>
                </section>
            </div>
            <p class="da">&copy; Tous droits réservés, teeTIM <?php echo date("Y")?></p>
        </footer>
    </div>
    
</body>
</html>