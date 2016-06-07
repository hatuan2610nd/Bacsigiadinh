package mta.th10.bacsigiadinh.models;

import mta.th10.bacsigiadinh.enums.MyType;

public abstract class MyBaseItem {
	private boolean isFavorite;

	public boolean isFavorite() {
		return isFavorite;
	}

	public void setFavorite(boolean isFavorite) {
		this.isFavorite = isFavorite;
	}
	
	public abstract String getTitle();
	public abstract MyType getType();
	
}
