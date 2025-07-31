<template>
  <div>
    <!-- Modal, enregistrement d'un service -->
    <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="ajouterServiceTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">  Modifiation rapide de l'article</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                  <div class="m-y-5">
                    <form enctype="multipart/form-data" method="POST">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="page-header">
                            <div class="tile-title-w-btn">
                              <h2 class="title">Article</h2>
                              <p><button class="btn btn-primary mr-3" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
                              <a class="btn btn-secondary" href=""><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row" style="margin-bottom: 2rem;">
                        <div class="col-lg-12">
                          <div class="form-group">
                              <label class="col-form-label col-form-label-lg" for="name">Titre de l'article</label>
                              <input class="form-control form-control-lg" id="name" name="title" type="text" :value="article.title">
                          </div>
                        </div>
                        <div class="col-lg-9">
                          <div class="bs-component">
                            <ul class="nav nav-tabs">
                              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Contenu Texte</a></li>
                              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Images</a></li>
                              <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade active show" id="home">
                                <div class="p-x-5 pt-5">
                                  <div class="mb-5">
                                    <div class="form-group">
                                      <label for="short_description">Description courte</label>
                                      <textarea class="form-control" id="short_description" v-model="article.short_description" name="short_description" rows="3" ></textarea>
                                    </div>
                                  </div>
                                  <div class="mb-5">
                                    <div class="form-group">
                                      <label for="description">Contenu de l'article</label>
                                      <textarea class="form-control" v-model="article.description" id="description" name="description" rows="3" ></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="profile">
                                <div class="p-x-5">
                                  <div class="form-group row mb-4">
                                    <div class="col-md-2">
                                      <img :src="'/'+article.image.path" alt="" class="img-70 mr-3 img-thumbnail img-show">
                                    </div>
                                    <div class="col-md-8">
                                      <label class="control-label">Image de l'article</label>
                                      <input class="form-control" name="image" type="file">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3">
                          <div class="p-x-5">
                            <div style="margin-bottom:5.5rem;"></div>
                            <div class="form-group">
                              <label for="status">Statut</label>
                              <select class="form-control select2" name="state" id="status">
                                <option value="1">Publié</option>
                                <option value="0" >Non publié</option>
                                <option value="2" >Archivé</option>
                                <option value="-2" >Corbeille</option>
                                <option v-if="article.state===3" value="3" selected>Programmé</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="categorie">Catégorie</label>
                              <select class="form-control select2" name="categorie" id="categorie">
                                <option v-for="(categorie,index) in categories" :key="index" :value="categorie.id" >{{categorie.name}}</option>
                              </select>
                            </div>
                            <h6 class="mt-5">Programmer la publication</h6>
                            <div class="form-group">
                              <label for="publish_up">Date de publication</label>
                            <input class="form-control datepicker" value="{{$article->publish_up}}" name="publish_up" id="publish_up" type="text" placeholder="Date de publication">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <p class="text-right">
                            <button class="btn btn-primary mr-3" @click.prevent="$emit('submit-form',article)"><i class="fa fa-fw fa-lg fa-check-circle"></i>Enregistrer</button>
                          <a class="btn btn-secondary" ><i class="fa fa-fw fa-lg fa-times-circle"></i>Annuler</a>
                          </p>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  props : {
    onSubmitForm : {
      type: Function,
      default(){
        return function(data){
          console.log('submitForm',data);
        }
      }
    }
  },
  data(){
    return {
      article : {},
      categorie : []
    }
  },

  mounted(){
    this.$on('submit-form',(data)=> {
      console.log('submit form emitted');
      this.onSubmitForm(data);
    })
  }

}
</script>

