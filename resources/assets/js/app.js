
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const doublebus = new Vue({
    el: '#doublebus',
    data: {
    	date: 'Выберите дату',
    	time: 'время',
    	gorod: 'Классический Ташкент',
    	bolalar: '0',
    	yoshlar: '0',
    	pensioner: '0',
    	invalid: '0',  
    },

    methods: {
    	res: function(){
    		var jami;
    		var bolalar=parseInt(this.bolalar);
    		var yoshlar=parseInt(this.yoshlar);
    		var pensioner=parseInt(this.pensioner);
    		var invalid=parseInt(this.invalid);
    		var jami=bolalar+yoshlar+pensioner+invalid;
    		return jami ;  
    	},

    	summ: function()
    	{
    	
    		return parseInt(this.bolalar)*5+parseInt(this.yoshlar)*5+parseInt(this.pensioner)*5+parseInt(this.invalid)*5;     
    	}
    }
});

const rent=new Vue({
	el: '#rent',
	data: {
		den_arendi: '',
		den_sdachi: '',
		gorod: 'Город аренды',
		kresla: '0',
	},

	methods:{
		sum_gorod: function(){
			
			var gorod=this.gorod;
			 switch (gorod) 
		    {
		        case gorod='Ferghana': return 5;
		        case gorod='Andijan': return 4;
		        case gorod='Namangan': return 6;
		        case gorod='Tashkent': return 11;
		        case gorod='Sirdarya': return 7;
		        case gorod='Samarqand': return 8;
		        case gorod='Bukhara': return 11;
		        case gorod='Qashqadarya': return 6;
		        case gorod='Surkhandarya': return 7;
		        case gorod='Jizzakh': return 8;
		        case gorod='Nukus': return 6;
		        case gorod='Navoiy': return 10;
		        default: return 0;
		    }    
		},
/*
		sum_den: function(){
			
			//var den1=this.den_arendi;
			//var den2=this.den_sdachi;

			//var date1 = new Date(this.den_arendi);
			//var date2 = new Date(this.den_sdachi);
			var den=Math.round(date2.getTime()/date1.getTime())
			return den;
		},*/

	}
})

const gid_cars = new Vue({
    el: '#gid_cars',
    data: {
    	date: 'Выберите дату',
    	time: 'время',
    	gorod: 'От куда?',
    	lang: 'Язык гида',
    },

    methods: {
    	sum_gorod: function(){
			
			var gorod=this.gorod;
			 switch (gorod) 
		    {
		        case gorod='Ferghana': return 5;
		        case gorod='Andijan': return 4;
		        case gorod='Namangan': return 6;
		        case gorod='Tashkent': return 11;
		        case gorod='Sirdarya': return 7;
		        case gorod='Samarqand': return 8;
		        case gorod='Bukhara': return 11;
		        case gorod='Qashqadarya': return 6;
		        case gorod='Surkhandarya': return 7;
		        case gorod='Jizzakh': return 8;
		        case gorod='Nukus': return 6;
		        case gorod='Navoiy': return 10;
		        default: return 0;
		    }    
		},
    }
});

const transfer = new Vue({
    el: '#transfer',
    data: {
    	date: 'Выберите дату',
    	time: 'время',
    	gorod: 'От куда?',
    	passajir: '0',
    },

    methods: {
    	sum_gorod: function(){
			
			var gorod=this.gorod;
			 switch (gorod) 
		    {
		        case gorod='Ferghana': return 5;
		        case gorod='Andijan': return 4;
		        case gorod='Namangan': return 6;
		        case gorod='Tashkent': return 11;
		        case gorod='Sirdarya': return 7;
		        case gorod='Samarqand': return 8;
		        case gorod='Bukhara': return 11;
		        case gorod='Qashqadarya': return 6;
		        case gorod='Surkhandarya': return 7;
		        case gorod='Jizzakh': return 8;
		        case gorod='Nukus': return 6;
		        case gorod='Navoiy': return 10;
		        default: return 0;
		    }
		},

		sum_passajir: function(){
			var passajir=parseInt(this.passajir);
			return 5*passajir;
		},
    }
});

const cortage = new Vue({
    el: '#cortage',
    data: {
    	date: 'Выберите дату',
    	from: 'с',
    	to: 'по',
    	gorod: '',
    },

    methods: {
    	sum_gorod: function(){
			
			var gorod=this.gorod;
			 switch (gorod) 
		    {
		        case gorod='Ferghana': return 5;
		        case gorod='Andijan': return 4;
		        case gorod='Namangan': return 6;
		        case gorod='Tashkent': return 11;
		        case gorod='Sirdarya': return 7;
		        case gorod='Samarqand': return 8;
		        case gorod='Bukhara': return 11;
		        case gorod='Qashqadarya': return 6;
		        case gorod='Surkhandarya': return 7;
		        case gorod='Jizzakh': return 8;
		        case gorod='Nukus': return 6;
		        case gorod='Navoiy': return 10;
		        default: return 0;
		    }
		},
    }
});

const direction=new Vue({
	el: '#direction',
	data: {
		from: '',
		to: '',
		gorod: '',
		kresla: '0',

	},

	methods:{
		sum_gorod: function(){
			
			var gorod=this.gorod;
			 switch (gorod) 
		    {
		        case gorod='Ferghana': return 5;
		        case gorod='Andijan': return 4;
		        case gorod='Namangan': return 6;
		        case gorod='Tashkent': return 11;
		        case gorod='Sirdarya': return 7;
		        case gorod='Samarqand': return 8;
		        case gorod='Bukhara': return 11;
		        case gorod='Qashqadarya': return 6;
		        case gorod='Surkhandarya': return 7;
		        case gorod='Jizzakh': return 8;
		        case gorod='Nukus': return 6;
		        case gorod='Navoiy': return 10;
		        default: return 0;
		    }    
		},

	}
})