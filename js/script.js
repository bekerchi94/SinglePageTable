var SingleTable = new Vue({
  el: '#app',  
  data: {
    name: 'Vue.js',
	pcolumn:'',
	pcondition:'',
	pvalue:'',
	pord:'',
	table:{},
	pageNumber: 0,
	pagedata:{},
	size:10,
	desc:false
  },
  methods: {
	 getByParam: function () {

		axios   .get("./functions.php",{ params: { col: this.pcolumn, con: this.pcondition, val: this.pvalue } })
                .then(response => {
					this.table=response.data
                });
	 },
	 getByOrderParam: function (val) {
		 if(val>0){
		 this.pord=val;
		 this.desc=!this.desc;
		 axios   .get("./functions.php",{ params: { col: this.pcolumn, con: this.pcondition, val: this.pvalue,ord:val,dsc:this.desc } })
                .then(response => {
					this.table=response.data
                });
			}
		 },
	nextPage(){
         this.pageNumber++;
    },
    prevPage(){
        this.pageNumber--;
    }
  },
  computed:{
	  pageCount(){
      let l = this.table.length,
          s = this.size;
      return Math.ceil(l/s);
	},
	paginatedData(){
    let start = this.pageNumber * this.size,
          end = start + this.size;
	if(this.table.length>0) return this.table.slice(start, end);
	}
  },
  beforeMount:function(){
    axios   .get("./functions.php")
                .then(response => {
					this.table=response.data
                });
 }

});