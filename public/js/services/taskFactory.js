/**
 * Created by robertocardielrodriguez on 20/02/16.
 */
angular.module('Enes')
    .factory('taskFactory', function (HOST, $http) {
        return{
            getAllTask : function(){
                return $http.get(HOST+'api/v1/tasks')
            }
        /*    save : function(user){
                return $http.post(HOST+'api/v1/users', user)
            },
            update : function(user){
                return $http.put(HOST+'api/v1/users', user)
            },
            delete : function(user){
                return $http.delete(HOST+'api/v1/users/'+user.id)
            }*/
        }
    });