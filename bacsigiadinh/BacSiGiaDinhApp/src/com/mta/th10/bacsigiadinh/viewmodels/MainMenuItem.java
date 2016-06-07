package com.mta.th10.bacsigiadinh.viewmodels;

import android.support.v4.app.Fragment;

public class MainMenuItem {
	private String title;
	private int imageId;
	private Fragment fragment;
	
	public MainMenuItem(String title, int imageId,Fragment fragment) {
		super();
		this.title = title;
		this.imageId = imageId;
		this.setFragment(fragment);
	}
	
	public String getTitle() {
		return title;
	}
	public void setTitle(String title) {
		this.title = title;
	}
	public int getImageId() {
		return imageId;
	}
	public void setImageId(int imageId) {
		this.imageId = imageId;
	}

	public Fragment getFragment() {
		return fragment;
	}

	public void setFragment(Fragment fragment) {
		this.fragment = fragment;
	}
	
	
}
