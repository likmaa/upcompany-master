<template>
  <div>
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label for="status">Filter selon un statut</label>
          <select class="form-control select2" v-model="state"  name="state" id="status">
            <option value="" >Tout</option>
            <option value="1" >Publié</option>
            <option value="0" >Non publié</option>
            <option value="2" >Archivé</option>
            <option value="-2" >Corbeille</option>
            <option value="3" selected>Programmé</option>
          </select>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Selection</th>
            <th>Statut</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th></th>
          </tr>
        </thead>
        <tbody v-if="articles.length > 0">
            <tr v-for="(article,index) in articles" :key="index">
              <td>{{index}}</td>
              <td>
                <div class="animated-checkbox">
                  <label>
                    <input name="aid[]" :value="article.id" type="checkbox"><span class="label-text"></span>
                  </label>
                </div>
              </td>
              <td>
                <div class="btn-group btn-group-sm status" role="group" aria-label="Status de l'article">
                  <button type="button" @click="changeState(article)" data-toggle="tooltip" class="btn btn-link btn-sm"><i class="fa fa-sm" :class="[setState(article)]"></i></button>
                </div>
              </td>
              <td>
                <a class="text-decoration-none" :href="link(article.id)">{{ article.title}} </a>
              </td>
              <td>{{article.created_by}}</td>
              <td>
                <div class="hover" >
                  <div class="btn-group">
                    <a class="btn btn-primary" :href="link(article.id)"><i class="fa fa-lg fa-eye"></i></a>
                    <a class="btn btn-primary" :href="link(article.id)"><i class="fa fa-lg fa-edit"></i></a>
                    <a class="btn btn-primary" @click.prevent="trashArticle(article)"><i class="fa fa-lg fa-trash"></i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
        </tbody>
        <tbody v-else>
          <tr>
            <td colspan="6"><p class="text-center">Aucun article</p></td>
          </tr>
        </tbody>
      </table>	
    </div>
  </div>
</template>

<script>
export default {
  props : {
    route : {
      type : String,
      default:'/admin/article'
    }
  },

  data(){
    return {
      articles: [],
      state : ""
    }
  },

  methods : {
    link(id){
      return this.route+'/'+id;
    },
    setState(article){
      let state = parseInt(article.state);
      let fa='';
      switch (state) {
        case -2 :
          fa='fa-trash';

          break;

        case 0:
          fa='fa-times-circle';
          break;
        
        case 1:
          fa='fa-check-circle';
          break;
        
        case 2:
          fa='fa-archive';
          break;
        
        case 3 :
          fa='fa-clock-o';
          break;

        default:
          fa='fa-file';
          break;
      }
      return fa;
    },

    publishArticle(article){
      
      const data = {
        article : article.id,
        _method : 'PUT',
        state : 'publish'
      }

      axios.post(`${this.route}/state/${article.id}`,data)
      .then( response => {
        // console.log('response',response.data);
        if (response.data.completed) {
          article.state=1;
        }
      })
    },
    unpublishArticle(article){
      const data = {
        article : article.id,
         _method : 'PUT',
        state : 'unpublish'
      }

      axios.post(`${this.route}/state/${article.id}`,data)
      .then(response => {
        // console.log('response',response.data);

        if (response.data.completed) {
          article.state=0;
          if (this.state !=="") {
            // this.articles=Vue.filter('filtre')(this.articles,0);
          }
        }
      })
    },
    changeState(article){
      let state=parseInt(article.state);
      
      console.log('change state',article);
      switch (state) {

        // Article is unpublished
        case 0:
          this.publishArticle(article)
          break;

        // Article is published
        case 1:
          this.unpublishArticle(article);
          break;

        default:

          break;
      }
    },

    search(data){
      
      return axios.post('/admin/article/search',data);
    },
    trashArticle(article){
      const data = {
        state : 'trash',
        _method : 'PUT',
      };
      axios.post(`${this.route}/state/${article.id}`,data)
      .then( response => {
        if (response.data.completed) {
          article.state=-2;
        }
      })
    }
  },

  watch : {
    state(newval){
      const data={};
      console.log('newval',newval);
      data.state= newval;

      this.search(data)
      .then( response => {
        console.log('search', response.data);
        this.articles= response.data;
      })
      .catch( error => console.log('error', error));
    }
  },
  mounted(){

    this.search({state : this.state})
    .then( response => {
      this.articles = response.data

      console.log('articles',this.articles);
    })
    .catch(error => console.log('error', error));

  }
}
</script>

<style>

</style>