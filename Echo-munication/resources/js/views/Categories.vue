<!-- Categories.vue -->
<template>
	<div class="container-fluid">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <router-link to="/">Tutoriels</router-link>
        </li>
        <li class="breadcrumb-item active">Categories</li>
      </ol>

      <div class="card mb-3">
            <div class="card-header d-flex">
              <i class="fas fa-chart-area"></i>
              Tuto
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Titre</td>
                            <td>Auteur</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lorem Lipsum</td>
                            <td>Lorem Lipsum</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>