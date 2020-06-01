var Dashboard = {
	
	data: {
		users: 0,
		posts: 0,
		// likes: 0,
		// visits: 0
	},

	cards: $('.row.cards'),

	init: function(){
		this.loadDataInCards();
	},

	loadDataInCards: function(){
		$.each(this.data, function(index, value){
			Dashboard.cards.find('.'+index).html(value);
		});
	},

	set: function(object){
		if(typeof object == 'object'){
			$.each(object, function(index, value){
				if(value != undefined)
					Dashboard.data[index] = value;
			});
		}
	}
	
};