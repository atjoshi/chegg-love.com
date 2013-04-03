C = {};
CC = function(name, object) {
	nameArray = name.split('.');
	
	// root is defaulted to window obj
	var ns = window.C;
    var className = ''; 
	
	// loop through each level of the namespace
	for(var i = 0; i < nameArray.length; i++) {
		// nm is current level name
		var nm = nameArray[i];
		// if not exist, add current name as obj to parent level, assign ns (parent) to current
        if(i+1 == nameArray.length){
            className = nm;
        }
        else{
            ns = ns[nm] || ( ns[nm] = {} );
        }
		
	}
    
    if(object){
        ns[className] = object;
        return object;
    }
    else{
        return (ns[className] = {});
    }
    
};