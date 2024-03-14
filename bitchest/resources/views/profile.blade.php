<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITCHEST</title>
</head>

<style>
    section{
        display: flex;
        justify-content: space-between;
    }
    .user-profile {
        background-color: #f0f0f0;
        border-radius: 10px;
        padding: 20px;
        width: 300px;
    }

    .user-profile img {
        max-width: 100%;
        border-radius: 50%;
    }

    .financial-info {
        background-color: #e0e0e0;
        border-radius: 10px;
        padding: 20px;
        width: 300px;
        margin-top: 20px;
    }
</style>

<body>
    <header>
        <img src="images/logo.jpeg" alt="" style="height: 200px; width:200px;">
        <nav>
            <a href="#">profile</a>
            <a href="#">achat-vente</a>
            <a href="#">recevoir</a>
            <a href="#">envoyé</a>
            <a href="#">new</a>
        </nav>
    </header>
    
    <section>

<div class="user-profile">
    <img src="{{ $user->photo_path }}" alt="Photo de l'utilisateur">
    <p><strong>Nom :</strong> {{ $user->name }}</p>
    <p><strong>E-mail :</strong> {{ $user->email }}</p>
    <p><strong>CNI :</strong> {{ $user->cni }}</p>
    <p><strong>Preuve de résidence :</strong> {{ $user->proof_of_residence }}</p>
</div>

<div class="financial-info">
    <p><strong>Solde :</strong> {{ $user->balance }} €</p>
    <img src="{{ $user->qr_code_path }}" alt="QR Code de l'utilisateur">
    <p><strong>Clé de sécurité :</strong> {{ $user->security_key }}</p>
    <p><strong>Adresse du wallet :</strong> {{ $user->wallet_address }}</p>
</div>

<div id="blockchain-info"></div>

<script>
    // Supposons que vous ayez déjà récupéré les informations de la blockchain pour un utilisateur
    const userBlockchainInfo = @json($userBlockchainInfo);

    // Sélectionnez la div où vous souhaitez afficher les informations
    const divBlockchainInfo = document.getElementById("blockchain-info");

    // Créez le contenu HTML à afficher sous forme de liste
    const htmlContent = `
<h2>Informations Blockchain pour ${userBlockchainInfo.username}</h2>
<ul>
    <li>Balance: ${userBlockchainInfo.balance} BTC</li>
    <li>Transactions:</li>
    <ul>
        ${userBlockchainInfo.transactions.map(transaction => `
            <li>Transaction ${transaction.id}: ${transaction.amount} BTC</li>
        `).join("")}
    </ul>
</ul>
`;

    // Injectez le contenu HTML dans la div
    divBlockchainInfo.innerHTML = htmlContent;
</script>
</section>

    <footer style="display: flex;  justify-content: space-around;">
        <div style="display: flex; flex-direction:column">
            <h3>a propos de nous</h3>
        </div>
        <div>
            <h3>produits</h3>
        </div>
        <div>
            <h3>apprendre</h3>
        </div>
        <div>
            <h3>nous contacter</h3>
        </div>
        <div>
            <h3>assistance technique</h3>
        </div>
    </footer>
</body>

</html>