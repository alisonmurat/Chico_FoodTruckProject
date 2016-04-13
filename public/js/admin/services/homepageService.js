app.factory('homepage', function ($http) {

	return {

		// Get all items from server / DB
		list: function () {
			return $http.get('/ajax/homepage');
		},

		// Get a single items from the server / DB
		get: function (id) {
			return $http.get('/ajax/homepage/'+id);
		},

		// Save a new items to the server / DB
		save: function (data) {
			return $http.post('/ajax/homepage', data);
		},

		// Update a items on the server / DB
		update: function (id, data) {
			return $http.put('/ajax/homepage/'+id, data);
		}

	}

});// JavaScript Document